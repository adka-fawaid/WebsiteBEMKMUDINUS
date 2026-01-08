<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakAdminController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();

        return view('admin.kontak.index', compact('kontaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'nama' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
        ]);

        Kontak::create($request->all());

        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipe' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'nama' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());

        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
