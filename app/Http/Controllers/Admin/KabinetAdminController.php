<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kabinet;
use App\Models\MaknaWarna;
use App\Models\MaknaSimbol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KabinetAdminController extends Controller
{
    /*
    * KABINET
    */
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


    /*
    * FILOSOFI (MAKNA SIMBOL & MAKNA WARNA)
    */
    public function filosofi($kabinetId)
    {
        $kabinet = Kabinet::findOrFail($kabinetId);

        $maknaSimbolList = MaknaSimbol::where('kabinet_id', $kabinetId)->get();
        $maknaWarnaList = MaknaWarna::where('kabinet_id', $kabinetId)->get();

        return view('admin.kabinet.filosofi.index', compact('kabinet', 'maknaSimbolList', 'maknaWarnaList'));
    }

    /*
    * MAKNA SIMBOL
    */
    public function storeMaknaSimbol(Request $request, $kabinetId)
    {
        $validatedData = $request->validate([
            'kabinet_id' => 'required|exists:kabinets,id',
            'simbol' => 'required|string|max:255',
            'makna' => 'required|string',
        ]);

        $validatedData['kabinet_id'] = $kabinetId;

        MaknaSimbol::create($validatedData);

        return redirect()->route('admin.kabinet.filosofi.index', $kabinetId)->with('success', 'Makna Simbol berhasil dibuat.');
    }

    public function updateMaknaSimbol(Request $request, $id)
    {
        $maknaSimbol = MaknaSimbol::findOrFail($id);

        $validatedData = $request->validate([
            'simbol' => 'required|string|max:255',
            'makna' => 'required|string',
        ]);

        $maknaSimbol->update($validatedData);

        return redirect()->route('admin.kabinet.filosofi.index', $maknaSimbol->kabinet_id)->with('success', 'Makna Simbol berhasil diperbarui.');
    }

    public function destroyMaknaSimbol($id)
    {
        $maknaSimbol = MaknaSimbol::findOrFail($id);
        $maknaSimbol->delete();

        return redirect()->route('admin.kabinet.filosofi.index', $maknaSimbol->kabinet_id)->with('success', 'Makna Simbol berhasil dihapus.');
    }


    /*
    * MAKNA WARNA
    */
    public function storeMaknaWarna(Request $request, $kabinetId)
    {
        $validatedData = $request->validate([
            'kabinet_id' => 'required|exists:kabinets,id',
            'warna' => 'required|string|max:255',
            'makna' => 'required|string',
        ]);

        $validatedData['kabinet_id'] = $kabinetId;

        MaknaWarna::create($validatedData);

        return redirect()->route('admin.kabinet.filosofi.index', $kabinetId)->with('success', 'Makna Warna berhasil dibuat.');
    }

    public function updateMaknaWarna(Request $request, $id)
    {
        $maknaWarna = MaknaWarna::findOrFail($id);

        $validatedData = $request->validate([
            'warna' => 'required|string|max:255',
            'makna' => 'required|string',
        ]);

        $maknaWarna->update($validatedData);

        return redirect()->route('admin.kabinet.filosofi.index', $maknaWarna->kabinet_id)->with('success', 'Makna Warna berhasil diperbarui.');
    }

    public function destroyMaknaWarna($id)
    {
        $maknaWarna = MaknaWarna::findOrFail($id);
        $maknaWarna->delete();

        return redirect()->route('admin.kabinet.filosofi.index', $maknaWarna->kabinet_id)->with('success', 'Makna Warna berhasil dihapus.');
    }
}
