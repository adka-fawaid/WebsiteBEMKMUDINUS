<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaAdminController extends Controller
{
    public function index()
    {
        $query = Berita::query();

        // Search by judul or deskripsi
        if (request()->filled('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%$search%")
                    ->orWhere('deskripsi', 'like', "%$search%");
            });
        }

        // Filter by kategori
        $kategori = request('kategori');
        $allowedKategori = ['Berita Acara', 'Berita Kegiatan', 'Press Release', 'Informasi', 'Lain-lain'];
        if ($kategori && in_array($kategori, $allowedKategori)) {
            $query->where('kategori', $kategori);
        }

        // Pagination with max 100
        $perPage = min((int) request('per_page', 10), 100);
        $beritas = $query->paginate($perPage)->appends(request()->except('page'));

        return view('admin.berita.index', compact('beritas', 'kategori'));
    }

    public function store(Request $request)
    {
        // Check gambar size
        if ($request->hasFile('gambar') && $request->file('gambar')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran gambar lebih dari 5 MB')->withInput();
        }

        // Check Dokumen size
        if ($request->hasFile('dokumen') && $request->file('dokumen')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran dokumen lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'slug' => 'required|unique:beritas,slug',
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|in:Berita Acara,Berita Kegiatan,Press Release,Informasi,Lain-lain',
            'gambar' => 'nullable|image|max:5120',
            'deskripsi' => 'required|string',
            'dokumen' => 'nullable|file|max:5120',
            'url' => 'nullable|url|max:255',
        ]);

        // Handle foto upload
        if ($request->hasFile('gambar')) {
            $imageName = time() . '-' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('storage/img/berita'), $imageName);
            $validatedData['gambar'] = $imageName;
        }

        // Handle foto upload
        if ($request->hasFile('dokumen')) {
            $imageName = time() . '-' . $request->file('dokumen')->getClientOriginalName();
            $request->file('dokumen')->move(public_path('storage/dokumen/berita'), $imageName);
            $validatedData['dokumen'] = $imageName;
        }

        Berita::create($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        // Check file size
        if ($request->hasFile('gambar') && $request->file('gambar')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran gambar lebih dari 5 MB')->withInput();
        }

        // Check Dokumen size
        if ($request->hasFile('dokumen') && $request->file('dokumen')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran dokumen lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'slug' => 'required|unique:beritas,slug,' . $berita->id,
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|in:Berita Acara,Berita Kegiatan,Press Release,Informasi,Lain-lain',
            'gambar' => 'nullable|image|max:5120',
            'deskripsi' => 'required|string',
            'dokumen' => 'nullable|file|max:5120',
            'url' => 'nullable|url|max:255',
        ]);

        // Handle foto upload
        if ($request->hasFile('gambar')) {
            // Delete old photo if exists
            $oldPhotoPath = public_path('storage/img/berita/' . $berita->gambar);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }

            // Upload new photo
            $imageName = time() . '-' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('storage/img/berita'), $imageName);
            $validatedData['gambar'] = $imageName;
        } else {
            // Keep old photo if no new photo uploaded
            unset($validatedData['gambar']);
        }

        // Handle dokumen upload
        if ($request->hasFile('dokumen')) {
            // Delete old dokumen if exists
            $oldFilePath = public_path('storage/dokumen/berita/' . $berita->dokumen);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            // Upload new dokumen
            $fileName = time() . '-' . $request->file('dokumen')->getClientOriginalName();
            $request->file('dokumen')->move(public_path('storage/dokumen/berita'), $fileName);
            $validatedData['dokumen'] = $fileName;
        } else {
            // Keep old dokumen if no new dokumen uploaded
            unset($validatedData['dokumen']);
        }

        $berita->update($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Delete associated gambar if exists
        $oldPhotoPath = public_path('storage/img/berita/' . $berita->gambar);
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath);
        }

        // Delete associated dokumen if exists
        $oldFilePath = public_path('storage/dokumen/berita/' . $berita->dokumen);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
