<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaUnit;
use App\Models\UnitOrganisasi;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class StrukturalAdminController extends Controller
{
    public function index()
    {
        $unitOrganisasis = UnitOrganisasi::all();

        return view('admin.struktural.index', compact('unitOrganisasis'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|in:Badan Pengurus Harian,Biro,Kementerian',
            'deskripsi' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Handle foto upload
        if ($request->hasFile('logo')) {
            $imageName = time() . '-' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('storage/img/unit-organisasi'), $imageName);
            $validatedData['logo'] = $imageName;
        }

        UnitOrganisasi::create($validatedData);

        return redirect()->route('admin.struktural.index')->with('success', 'Struktural berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $unitOrganisasi = UnitOrganisasi::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|in:Badan Pengurus Harian,Biro,Kementerian',
            'deskripsi' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            $oldLogoPath = public_path('storage/img/unit-organisasi/' . $unitOrganisasi->logo);
            if (file_exists($oldLogoPath)) {
                unlink($oldLogoPath);
            }

            // Upload new logo
            $imageName = time() . '-' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('storage/img/unit-organisasi'), $imageName);
            $validatedData['logo'] = $imageName;
        } else {
            // Keep old logo if no new logo uploaded
            unset($validatedData['logo']);
        }

        $unitOrganisasi->update($validatedData);

        return redirect()->route('admin.struktural.index')->with('success', 'Struktural berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $unitOrganisasi = UnitOrganisasi::findOrFail($id);

        // Delete logo if exists
        $logoPath = public_path('storage/img/unit-organisasi/' . $unitOrganisasi->logo);
        if (file_exists($logoPath)) {
            unlink($logoPath);
        }

        $unitOrganisasi->delete();

        return redirect()->route('admin.struktural.index')->with('success', 'Struktural berhasil dihapus.');
    }

    public function unitOrganisasi($id)
    {
        $anggotaUnits = AnggotaUnit::where('unit_organisasi_id', $id)->get();

        return view('admin.struktural.unit-organisasi.index', compact('anggotaUnits'));
    }
}
