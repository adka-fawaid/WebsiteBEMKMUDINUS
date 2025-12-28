<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranAdminController extends Controller
{
    /*
    * PENDAFTARAN
    */
    public function index()
    {
        $pendaftarans = Pendaftaran::all();

        return view('admin.pendaftaran.index', compact('pendaftarans'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after_or_equal:tanggal_buka',
        ]);

        $pendaftaran->update($validatedData);

        return redirect()->route('admin.pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }
}
