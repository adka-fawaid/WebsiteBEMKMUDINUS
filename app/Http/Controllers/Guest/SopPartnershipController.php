<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\SopFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SopPartnershipController extends Controller
{
    /**
     * Display a listing of SOP files
     */
    public function index()
    {
        $sopFiles = SopFile::latest()->get();
        return view('guest.partnership.sop_list', compact('sopFiles'));
    }

    /**
     * Show the form for creating a new SOP file
     */
    public function create()
    {
        return view('guest.partnership.sop_upload');
    }

    /**
     * Store a newly created SOP file in storage
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|mimes:pdf|max:10240', // Max 10MB
        ], [
            'title.required' => 'Judul SOP harus diisi',
            'file.required' => 'File PDF harus diunggah',
            'file.mimes' => 'File harus berformat PDF',
            'file.max' => 'Ukuran file maksimal 10MB',
        ]);

        try {
            // Handle file upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9\-_\.]/', '', $file->getClientOriginalName());
                
                // Store file to public/uploads/sop_medpart
                $filePath = $file->storeAs('public/uploads/sop_medpart', $fileName);
                
                // Save to database
                SopFile::create([
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'file_path' => 'uploads/sop_medpart/' . $fileName,
                ]);

                return redirect()->route('sop.index')->with('success', 'File SOP berhasil diupload!');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengupload file: ' . $e->getMessage());
        }

        return back()->with('error', 'Gagal mengupload file');
    }

    /**
     * Download SOP file
     */
    public function download($id)
    {
        $sopFile = SopFile::findOrFail($id);
        
        $filePath = 'public/' . $sopFile->file_path;
        
        if (Storage::exists($filePath)) {
            return Storage::download($filePath, $sopFile->title . '.pdf');
        }

        return back()->with('error', 'File tidak ditemukan');
    }

    /**
     * Delete SOP file (for admin only)
     */
    public function destroy($id)
    {
        $sopFile = SopFile::findOrFail($id);
        
        // Delete file from storage
        $filePath = 'public/' . $sopFile->file_path;
        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
        }

        // Delete from database
        $sopFile->delete();

        return back()->with('success', 'File SOP berhasil dihapus!');
    }
}
