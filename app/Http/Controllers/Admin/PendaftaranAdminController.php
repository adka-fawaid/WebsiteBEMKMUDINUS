<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpsiJawaban;
use App\Models\Pendaftaran;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PertanyaanPendaftaran;

class PendaftaranAdminController extends Controller
{
    /*
    * PENDAFTARAN
    */
    public function index()
    {
        // Ambil semua program kerja yang belum ada di tabel pendaftarans untuk dropdown create and edit pendaftaran
        $usedProgramKerjaIds = Pendaftaran::pluck('program_kerja_id')->toArray();
        $programKerjas = ProgramKerja::whereNotIn('id', $usedProgramKerjaIds)->where('pendaftaran', true)->get();

        $pendaftarans = Pendaftaran::all();

        return view('admin.pendaftaran.index', compact('pendaftarans', 'programKerjas'));
    }

    public function store(Request $request)
    {
        // Tanggal validasi
        if ($request->input('tanggal_tutup') < $request->input('tanggal_buka')) {
            return redirect()->back()->with('error', 'Tanggal tutup harus setelah atau sama dengan tanggal buka.')->withInput();
        }

        $validatedData = $request->validate([
            'program_kerja_id' => 'required|exists:program_kerjas,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after_or_equal:tanggal_buka',
        ]);

        Pendaftaran::create($validatedData);

        return redirect()->route('admin.pendaftaran.index')->with('success', 'Pendaftaran berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after_or_equal:tanggal_buka',
        ]);

        $pendaftaran->update($validatedData);

        return redirect()->route('admin.pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('admin.pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus.');
    }


    /*
    * FORMULIR PENDAFTARAN
    */
    public function formulirPendaftaran($pendaftaranId)
    {
        $pendaftaran = Pendaftaran::findOrFail($pendaftaranId);
        $pertanyaanPendaftarans = PertanyaanPendaftaran::where('pendaftaran_id', $pendaftaranId)->get();
        $pertanyaanPendaftaranIds = $pertanyaanPendaftarans->pluck('id')->toArray();

        $opsiJawabans = OpsiJawaban::whereIn('pertanyaan_pendaftaran_id', $pertanyaanPendaftaranIds)->get();

        return view('admin.pendaftaran.formulir.index', compact('pendaftaran', 'pertanyaanPendaftarans', 'opsiJawabans'));
    }

    public function storePertanyaan(Request $request, $pendaftaranId)
    {
        $validatedData = $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'tipe_jawaban' => 'required|string|in:Jawaban Panjang,Jawaban Singkat,Opsi,File',
            'opsi_jawaban' => 'array',
            'opsi_jawaban.*' => 'nullable|string|max:255',
        ]);

        $validatedData['pendaftaran_id'] = $pendaftaranId;

        $pertanyaan = PertanyaanPendaftaran::create($validatedData);

        // Jika tipe jawaban Opsi, simpan opsi_jawaban
        if ($validatedData['tipe_jawaban'] === 'Opsi' && $request->has('opsi_jawaban')) {
            $opsiArray = array_filter($request->input('opsi_jawaban'), fn($v) => $v !== null && $v !== '');
            foreach ($opsiArray as $opsi) {
                OpsiJawaban::create([
                    'pertanyaan_pendaftaran_id' => $pertanyaan->id,
                    'opsi' => $opsi,
                ]);
            }
        }

        return redirect()->route('admin.pendaftaran.formulir.index', $pendaftaranId)->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    public function updatePertanyaan(Request $request, $pendaftaranId, $pertanyaanId)
    {
        $pertanyaan = PertanyaanPendaftaran::findOrFail($pertanyaanId);

        $rules = [
            'pertanyaan' => 'required|string|max:255',
            'tipe_jawaban' => 'required|string|in:Jawaban Panjang,Jawaban Singkat,Opsi,File',
        ];
        // Validasi opsi_jawaban hanya jika tipe Opsi
        if ($request->input('tipe_jawaban') === 'Opsi') {
            $rules['opsi_jawaban'] = 'array';
            $rules['opsi_jawaban.*'] = 'nullable|string|max:255';
        }
        $validatedData = $request->validate($rules);

        // Cek tipe_jawaban sebelumnya
        $prevTipeJawaban = $pertanyaan->tipe_jawaban;

        $pertanyaan->update([
            'pertanyaan' => $validatedData['pertanyaan'],
            'tipe_jawaban' => $validatedData['tipe_jawaban'],
        ]);

        // Jika sebelumnya Opsi dan sekarang bukan Opsi, hapus semua OpsiJawaban
        if ($prevTipeJawaban === 'Opsi' && $validatedData['tipe_jawaban'] !== 'Opsi') {
            OpsiJawaban::where('pertanyaan_pendaftaran_id', $pertanyaan->id)->delete();
        }

        // Jika tipe jawaban Opsi, update opsi_jawaban
        if ($validatedData['tipe_jawaban'] === 'Opsi' && $request->has('opsi_jawaban')) {
            // Hapus opsi lama
            OpsiJawaban::where('pertanyaan_pendaftaran_id', $pertanyaan->id)->delete();
            // Tambah opsi baru
            $opsiArray = array_filter($request->input('opsi_jawaban'), fn($v) => $v !== null && $v !== '');
            foreach ($opsiArray as $opsi) {
                OpsiJawaban::create([
                    'pertanyaan_pendaftaran_id' => $pertanyaan->id,
                    'opsi' => $opsi,
                ]);
            }
        }

        return redirect()->route('admin.pendaftaran.formulir.index', $pertanyaan->pendaftaran_id)->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    public function destroyPertanyaan($pertanyaanId)
    {
        $pertanyaan = PertanyaanPendaftaran::findOrFail($pertanyaanId);
        $pendaftaranId = $pertanyaan->pendaftaran_id;
        // Hapus semua opsi jawaban terkait jika ada
        OpsiJawaban::where('pertanyaan_pendaftaran_id', $pertanyaan->id)->delete();
        $pertanyaan->delete();

        return redirect()->route('admin.pendaftaran.formulir.index', $pendaftaranId)->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
