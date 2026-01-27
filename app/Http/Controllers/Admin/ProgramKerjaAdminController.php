<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pendaftaran;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramKerjaAdminController extends Controller
{
    public function index()
    {
        $query = ProgramKerja::query();

        // Search by nama or deskripsi
        if (request()->filled('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                    ->orWhere('deskripsi', 'like', "%$search%");
            });
        }

        // Filter by kategori
        $kategori = request('kategori');
        $allowedKategori = ['Rencana Kerja Tahunan', 'Non Rencana Kerja Tahunan', 'Duta Kampus'];
        if ($kategori && in_array($kategori, $allowedKategori)) {
            $query->where('kategori', $kategori);
        }

        // Pagination
        $perPage = request('per_page', 10);
        $programKerjas = $query->paginate($perPage)->appends(request()->except('page'));

        return view('admin.program-kerja.index', compact('programKerjas', 'kategori'));
    }

    public function updateLinkStatus(Request $request, $id)
    {
        $request->validate([
            'use_link' => 'required|boolean',
        ]);

        $programKerja = ProgramKerja::findOrFail($id);

        // Check if link_pendaftaran is null
        if (empty($programKerja->link_pendaftaran)) {
            return redirect()->route('admin.program-kerja.index')->with('error', 'Link pendaftaran tidak boleh kosong. Silakan isi link pendaftaran terlebih dahulu.');
        }

        $programKerja->use_link = $request->use_link;
        $programKerja->save();

        return redirect()->route('admin.program-kerja.index')->with('success', 'Status link pendaftaran berhasil diperbarui.');
    }

    public function store(Request $request)
    {
        // Check file size
        if ($request->hasFile('foto') && $request->file('foto')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        // Tanggal validasi
        if ($request->input('tanggal_selesai') < $request->input('tanggal_mulai')) {
            return redirect()->back()->with('error', 'Tanggal selesai harus setelah atau sama dengan tanggal mulai.')->withInput();
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|in:Rencana Kerja Tahunan,Non Rencana Kerja Tahunan,Duta Kampus',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'foto' => 'required|image|max:5120',
            'pendaftaran' => 'nullable|boolean',
            'link_pendaftaran' => 'nullable|url|max:255',
            'use_link' => 'nullable|boolean',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            $imageName = time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('storage/img/program-kerja'), $imageName);
            $validatedData['foto'] = $imageName;
        }

        $validatedData['link'] = null;

        $programKerja = ProgramKerja::create($validatedData);

        // Create Pendaftaran if pendaftaran is true
        if ($request->input('pendaftaran') == true) {
            Pendaftaran::create([
                'program_kerja_id' => $programKerja->id,
                'judul' => 'Pendaftaran ' . $programKerja->nama,
                'deskripsi' => $programKerja->deskripsi,
                'tanggal_buka' => $programKerja->tanggal_mulai,
                'tanggal_tutup' => $programKerja->tanggal_selesai,
            ]);
        }

        return redirect()->route('admin.program-kerja.index')->with('success', 'Program Kerja berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $programKerja = ProgramKerja::findOrFail($id);

        // Check file size
        if ($request->hasFile('foto') && $request->file('foto')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        // Tanggal validasi
        if ($request->input('tanggal_selesai') < $request->input('tanggal_mulai')) {
            return redirect()->back()->with('error', 'Tanggal selesai harus setelah atau sama dengan tanggal mulai.')->withInput();
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|in:Rencana Kerja Tahunan,Non Rencana Kerja Tahunan,Duta Kampus',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'foto' => 'nullable|image|max:5120',
            'pendaftaran' => 'nullable|boolean',
            'link_pendaftaran' => 'nullable|url|max:255',
            'use_link' => 'nullable|boolean',
        ]);

        // Handle logo upload
        if ($request->hasFile('foto')) {
            // Delete old foto if exists
            $oldFotoPath = public_path('storage/img/program-kerja/' . $programKerja->foto);
            if (file_exists($oldFotoPath)) {
                unlink($oldFotoPath);
            }

            // Upload new foto
            $imageName = time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('storage/img/program-kerja'), $imageName);
            $validatedData['foto'] = $imageName;
        } else {
            // Keep old foto if no new foto uploaded
            unset($validatedData['foto']);
        }

        $programKerja->update($validatedData);

        // Check if pendaftaran data exists
        $pendaftaran = Pendaftaran::where('program_kerja_id', $programKerja->id)->first();

        if ($request->input('pendaftaran') == true) {
            if (!$pendaftaran) {
                // Create pendaftaran if not exists
                Pendaftaran::create([
                    'program_kerja_id' => $programKerja->id,
                    'judul' => 'Pendaftaran ' . $programKerja->nama,
                    'deskripsi' => $programKerja->deskripsi,
                    'tanggal_buka' => $programKerja->tanggal_mulai,
                    'tanggal_tutup' => $programKerja->tanggal_selesai,
                ]);
            } else {
                // Update pendaftaran if exists
                $pendaftaran->update([
                    'judul' => 'Pendaftaran ' . $programKerja->nama,
                    'deskripsi' => $programKerja->deskripsi,
                ]);
            }
        }

        return redirect()->route('admin.program-kerja.index')->with('success', 'Program Kerja berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $programKerja = ProgramKerja::findOrFail($id);

        // Delete foto if exists
        $fotoPath = public_path('storage/img/program-kerja/' . $programKerja->foto);
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }

        // Delete pendaftaran if exists
        $pendaftaran = Pendaftaran::where('program_kerja_id', $programKerja->id)->first();
        if ($pendaftaran) {
            $pendaftaran->delete();
        }

        $programKerja->delete();

        return redirect()->route('admin.program-kerja.index')->with('success', 'Program Kerja berhasil dihapus.');
    }
}
