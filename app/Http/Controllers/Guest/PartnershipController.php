<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use App\Models\KategoriPartnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    public function index()
    {
        return view('guest.partnership.partnership', [
            'partnerships' => Partnership::where('status', 'approved')->orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $partnership = Partnership::where('slug', $slug)->first();
        return view('guest.partnership.detail_partnership', [
            'partnership' => $partnership
        ]);
    }

    /**
     * Show the form for creating a new partnership
     */
    public function create()
    {
        $kategoris = KategoriPartnership::all();
        return view('guest.partnership.create_partnership', compact('kategoris'));
    }

    /**
     * Store a newly created partnership in storage
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_partnership_id' => 'required|exists:kategori_partnerships,id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url',
            'pdf_file' => 'nullable|mimes:pdf|max:10240', // Max 10MB
        ], [
            'kategori_partnership_id.required' => 'Kategori partnership harus dipilih',
            'nama.required' => 'Nama partnership harus diisi',
            'link.url' => 'Link harus berformat URL yang valid',
            'pdf_file.mimes' => 'File harus berformat PDF',
            'pdf_file.max' => 'Ukuran file maksimal 10MB',
        ]);

        try {
            $pdfFileName = null;
            
            // Handle PDF file upload
            if ($request->hasFile('pdf_file')) {
                $file = $request->file('pdf_file');
                $pdfFileName = time() . '_' . preg_replace('/[^A-Za-z0-9\-_\.]/', '', $file->getClientOriginalName());
                $file->storeAs('public/partnership', $pdfFileName);
            }

            Partnership::create([
                'kategori_partnership_id' => $request->input('kategori_partnership_id'),
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'link' => $request->input('link'),
                'pdf_file' => $pdfFileName,
                'slug' => \Str::slug($request->input('nama')) . '-' . time(),
                'status' => 'pending', // Default status pending, admin harus approve
            ]);

            return redirect()->route('partnership.index')->with('success', 'Data partnership berhasil ditambahkan! Menunggu persetujuan admin.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan partnership: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified partnership
     */
    public function edit($id)
    {
        $partnership = Partnership::findOrFail($id);
        $kategoris = KategoriPartnership::all();
        return view('guest.partnership.edit_partnership', compact('partnership', 'kategoris'));
    }

    /**
     * Update the specified partnership in storage
     */
    public function update(Request $request, $id)
    {
        $partnership = Partnership::findOrFail($id);

        $request->validate([
            'kategori_partnership_id' => 'required|exists:kategori_partnerships,id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url',
            'pdf_file' => 'nullable|mimes:pdf|max:10240', // Max 10MB
        ], [
            'kategori_partnership_id.required' => 'Kategori partnership harus dipilih',
            'nama.required' => 'Nama partnership harus diisi',
            'link.url' => 'Link harus berformat URL yang valid',
            'pdf_file.mimes' => 'File harus berformat PDF',
            'pdf_file.max' => 'Ukuran file maksimal 10MB',
        ]);

        try {
            $pdfFileName = $partnership->pdf_file;
            
            // Handle PDF file upload
            if ($request->hasFile('pdf_file')) {
                // Delete old file if exists
                if ($partnership->pdf_file && Storage::exists('public/partnership/' . $partnership->pdf_file)) {
                    Storage::delete('public/partnership/' . $partnership->pdf_file);
                }

                $file = $request->file('pdf_file');
                $pdfFileName = time() . '_' . preg_replace('/[^A-Za-z0-9\-_\.]/', '', $file->getClientOriginalName());
                $file->storeAs('public/partnership', $pdfFileName);
            }

            $partnership->update([
                'kategori_partnership_id' => $request->input('kategori_partnership_id'),
                'nama' => $request->input('nama'),
                'deskripsi' => $request->input('deskripsi'),
                'link' => $request->input('link'),
                'pdf_file' => $pdfFileName,
            ]);

            return redirect()->route('partnership.index')->with('success', 'Data partnership berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui partnership: ' . $e->getMessage());
        }
    }

    /**
     * Download partnership PDF file
     */
    public function downloadPdf($id)
    {
        $partnership = Partnership::findOrFail($id);

        if (!$partnership->pdf_file || !Storage::exists('public/partnership/' . $partnership->pdf_file)) {
            return back()->with('error', 'File PDF tidak ditemukan');
        }

        return Storage::download('public/partnership/' . $partnership->pdf_file, $partnership->nama . '.pdf');
    }

    /**
     * Delete partnership (for admin only)
     */
    public function destroy($id)
    {
        $partnership = Partnership::findOrFail($id);

        // Delete PDF file if exists
        if ($partnership->pdf_file && Storage::exists('public/partnership/' . $partnership->pdf_file)) {
            Storage::delete('public/partnership/' . $partnership->pdf_file);
        }

        $partnership->delete();

        return back()->with('success', 'Data partnership berhasil dihapus!');
    }
}
