<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kabinet;
use Illuminate\Http\Request;

class KabinetAdminController extends Controller
{
    public function index()
    {
        $kabinet = Kabinet::first();

        return view('admin.kabinet.index', compact('kabinet'));
    }

    public function update(Request $request, $id)
    {
        $kabinet = Kabinet::findOrFail($id);

        // Check file size
        if ($request->hasFile('logo') && $request->file('logo')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'nama' => 'required|string|max:255',
            'periode' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Handle foto upload
        if ($request->hasFile('logo')) {
            // Delete old photo if exists
            $oldPhotoPath = public_path('storage/img/kabinet/' . $kabinet->logo);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }

            // Upload new photo
            $imageName = time() . '-' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('storage/img/kabinet'), $imageName);
            $validatedData['logo'] = $imageName;
        } else {
            // Keep old photo if no new photo uploaded
            unset($validatedData['logo']);
        }

        $kabinet->update($validatedData);

        return redirect()->route('admin.kabinet.index')->with('success', 'Kabinet berhasil diperbarui.');
    }
}
