<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Support\Str;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\RespondPendaftaran;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $query = ProgramKerja::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }

        // Filter by kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $kegiatans = $query->latest()->get();
        $kategoris = ProgramKerja::select('kategori')->distinct()->pluck('kategori');

        return view('guest.kegiatan.index', compact('kegiatans', 'kategoris'));
    }


    public function detail($id)
    {
        $kegiatan = ProgramKerja::with('pendaftarans')->findOrFail($id);

        $now = now();

        $pendaftaran = $kegiatan->pendaftarans->first(function ($item) use ($now) {
            if (!$item->tanggal_buka) return false;

            $buka  = Carbon::parse($item->tanggal_buka)->startOfDay();
            $tutup = $item->tanggal_tutup
                ? Carbon::parse($item->tanggal_tutup)->endOfDay()
                : null;

            return $tutup
                ? $now->between($buka, $tutup)
                : $now->greaterThanOrEqualTo($buka);
        });

        return view('guest.kegiatan.detail', compact('kegiatan', 'pendaftaran'));
    }

    public function daftar($id)
    {
        $kegiatan = ProgramKerja::with([
            'pendaftarans.pertanyaanPendaftarans.opsiJawaban'
        ])->findOrFail($id);

        $now = now();

        // Ambil pendaftaran aktif
        $pendaftaran = $kegiatan->pendaftarans->first(function ($item) use ($now) {
            if (!$item->tanggal_buka) return false;

            $buka  = Carbon::parse($item->tanggal_buka)->startOfDay();
            $tutup = $item->tanggal_tutup
                ? Carbon::parse($item->tanggal_tutup)->endOfDay()
                : null;

            return $tutup
                ? $now->between($buka, $tutup)
                : $now->greaterThanOrEqualTo($buka);
        });

        // Ambil pertanyaan jika pendaftaran aktif
        $pertanyaanPendaftarans = $pendaftaran
            ? $pendaftaran->pertanyaanPendaftarans
            : collect();

        return view('guest.kegiatan.daftar', compact(
            'kegiatan',
            'pendaftaran',
            'pertanyaanPendaftarans'
        ));
    }

    public function storeDaftar(Request $request, $id)
    {
        $kegiatan = ProgramKerja::with([
            'pendaftarans.pertanyaanPendaftarans'
        ])->findOrFail($id);

        $now = now();

        $pendaftaran = $kegiatan->pendaftarans->first(function ($item) use ($now) {
            $buka  = Carbon::parse($item->tanggal_buka)->startOfDay();
            $tutup = $item->tanggal_tutup
                ? Carbon::parse($item->tanggal_tutup)->endOfDay()
                : null;

            return $tutup
                ? $now->between($buka, $tutup)
                : $now->greaterThanOrEqualTo($buka);
        });

        if (!$pendaftaran) {
            return back()->with('error', 'Pendaftaran belum dibuka atau sudah ditutup.');
        }

        // 🔢 NOMOR PENDAFTARAN (FORMAT MP-YYYY-0001)
        $tahun = date('Y');
        $nomorUrut = str_pad(
            RespondPendaftaran::whereYear('created_at', $tahun)
                ->distinct('nomor_pendaftaran')
                ->count() + 1,
            4,
            '0',
            STR_PAD_LEFT
        );
        $nomorPendaftaran = 'MP-' . $tahun . '-' . $nomorUrut;

        DB::beginTransaction();

        try {
            foreach ($pendaftaran->pertanyaanPendaftarans as $pertanyaan) {
                $jawaban = $request->input("jawaban.{$pertanyaan->id}");

                if (
                    $pertanyaan->tipe_jawaban === 'File' &&
                    $request->hasFile("jawaban.{$pertanyaan->id}")
                ) {
                    $jawaban = $request
                        ->file("jawaban.{$pertanyaan->id}")
                        ->store('pendaftaran', 'public');
                }

                RespondPendaftaran::create([
                    'pendaftaran_id'    => $pendaftaran->id,
                    'nomor_pendaftaran' => $nomorPendaftaran,
                    'pertanyaan'        => $pertanyaan->pertanyaan,
                    'jawaban'           => $jawaban,
                ]);
            }

            DB::commit();

            return redirect()
                ->route('guest.kegiatan.sukses', $kegiatan->id)
                ->with('nomorPendaftaran', $nomorPendaftaran);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan saat menyimpan pendaftaran.');
        }
    }

    public function sukses($id)
    {
        $kegiatan = ProgramKerja::findOrFail($id);

        $nomorPendaftaran = session('nomorPendaftaran');

        if (!$nomorPendaftaran) {
            return redirect()->route('guest.kegiatan.detail', $id);
        }

        return view('guest.kegiatan.sukses', compact(
            'kegiatan',
            'nomorPendaftaran'
        ));
    }
}
