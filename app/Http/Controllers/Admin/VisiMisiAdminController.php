<?php

namespace App\Http\Controllers\Admin;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiMisiAdminController extends Controller
{
    public function index()
    {
        $visiList = Visi::all();
        $misiList = Misi::all();

        return view('admin.visi-misi.index', compact('visiList', 'misiList'));
    }

    public function storeVisi(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required|string',
        ]);

        Visi::create([
            'visi' => $validatedData['visi'],
        ]);

        return redirect()->route('admin.visi-misi.index')->with('success', 'Visi berhasil dibuat.');
    }

    public function storeMisi(Request $request)
    {
        $validatedData = $request->validate([
            'misi' => 'required|string',
        ]);

        Misi::create([
            'misi' => $validatedData['misi'],
        ]);

        return redirect()->route('admin.visi-misi.index')->with('success', 'Misi berhasil dibuat.');
    }

    public function updateVisi(Request $request, $id)
    {
        $visi = Visi::findOrFail($id);

        $validatedData = $request->validate([
            'visi' => 'required|string',
        ]);

        $visi->visi = $validatedData['visi'];
        $visi->save();

        return redirect()->route('admin.visi-misi.index')->with('success', 'Visi berhasil diperbarui.');
    }

    public function updateMisi(Request $request, $id)
    {
        $misi = Misi::findOrFail($id);

        $validatedData = $request->validate([
            'misi' => 'required|string',
        ]);

        $misi->update($validatedData);

        return redirect()->route('admin.visi-misi.index')->with('success', 'Misi berhasil diperbarui.');
    }

    public function destroyVisi($id)
    {
        $visi = Visi::findOrFail($id);
        $visi->delete();

        return redirect()->route('admin.visi-misi.index')->with('success', 'Visi berhasil dihapus.');
    }

    public function destroyMisi($id)
    {
        $misi = Misi::findOrFail($id);
        $misi->delete();

        return redirect()->route('admin.visi-misi.index')->with('success', 'Misi berhasil dihapus.');
    }
}
