<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PresidenMahasiswa;
use Illuminate\Http\Request;

class SambutanPresmaAdminController extends Controller
{
    public function index()
    {
        $sambutanPresma = PresidenMahasiswa::first();

        return view('admin.sambutan-presma.index', compact('sambutanPresma'));
    }

    public function edit($id)
    {
        $sambutanPresma = PresidenMahasiswa::findOrFail($id);

        return view('admin.sambutan-presma.edit', compact('sambutanPresma'));
    }

    public function update(Request $request, $id)
    {
        $sambutanPresma = PresidenMahasiswa::findOrFail($id);

        $validatedData = $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'nama' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'angkatan' => 'required|string|max:4',
            'nim' => 'required|string|max:20',
            'sambutan' => 'required|string',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            // Delete old photo if exists
            $oldPhotoPath = public_path('storage/img/presiden-mahasiswa/' . $sambutanPresma->foto);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }

            // Upload new photo
            $imageName = time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('storage/img/presiden-mahasiswa'), $imageName);
            $validatedData['foto'] = $imageName;
        } else {
            // Keep old photo if no new photo uploaded
            unset($validatedData['foto']);
        }

        $sambutanPresma->update($validatedData);

        return redirect()->route('admin.sambutan-presma.index')->with('success', 'Sambutan Presiden Mahasiswa berhasil diperbarui.');
    }
}
