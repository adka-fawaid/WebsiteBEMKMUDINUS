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

        $query = Pendaftaran::query();

        // Search by judul or deskripsi
        if (request()->filled('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%$search%")
                    ->orWhere('deskripsi', 'like', "%$search%");
            });
        }

        // Pagination
        $perPage = min((int) request('per_page', 10), 100);
        $pendaftarans = $query->paginate($perPage)->appends(request()->except('page'));

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

    public function updatePertanyaan(Request $request, $pertanyaanId)
    {
        $pertanyaan = PertanyaanPendaftaran::findOrFail($pertanyaanId);

        $validated = $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'tipe_jawaban' => 'required|in:Jawaban Panjang,Jawaban Singkat,Opsi,File',
            'opsi_jawaban' => 'nullable|array',
            'opsi_jawaban.*' => 'nullable|string|max:255',
        ]);

        // Update pertanyaan utama
        $pertanyaan->update([
            'pertanyaan'   => $validated['pertanyaan'],
            'tipe_jawaban' => $validated['tipe_jawaban'],
        ]);

        /**
         * ===============================
         * HANDLE OPSI JAWABAN
         * ===============================
         */
        if ($validated['tipe_jawaban'] === 'Opsi') {

            // Bersihkan opsi lama (PALING AMAN)
            $pertanyaan->opsiJawaban()->delete();

            // Simpan ulang opsi baru
            if ($request->filled('opsi_jawaban')) {
                foreach ($request->opsi_jawaban as $opsi) {
                    if (!empty(trim($opsi))) {
                        OpsiJawaban::create([
                            'pertanyaan_pendaftaran_id' => $pertanyaan->id,
                            'opsi' => $opsi,
                        ]);
                    }
                }
            }
        } else {
            // Jika tipe bukan Opsi, hapus semua opsi
            $pertanyaan->opsiJawaban()->delete();
        }

        return redirect()
            ->route('admin.pendaftaran.formulir.index', $pertanyaan->pendaftaran_id)
            ->with('success', 'Pertanyaan berhasil diperbarui.');
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
