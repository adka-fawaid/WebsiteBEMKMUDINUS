<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;

class KelolaPartnershipAdminController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();

        return view('admin.kelola-partnership.index', compact('partnerships'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'nullable|string',
            'link_pendaftaran' => 'nullable|url',
            'use_link' => 'required|boolean',
        ]);

        $partnership = Partnership::findOrFail($id);
        $partnership->deskripsi = $request->deskripsi;
        $partnership->link_pendaftaran = $request->link_pendaftaran;
        $partnership->use_link = $request->use_link;
        $partnership->save();

        return redirect()->route('admin.kelola-partnership.index')->with('success', 'Partnership berhasil diperbarui.');
    }

    public function updateLinkStatus(Request $request, $id)
    {
        $request->validate([
            'use_link' => 'required|boolean',
        ]);

        $partnership = Partnership::findOrFail($id);

        // Check if link_pendaftaran is null
        if (empty($partnership->link_pendaftaran)) {
            return redirect()->route('admin.kelola-partnership.index')->with('error', 'Link pendaftaran tidak boleh kosong. Silakan isi link pendaftaran terlebih dahulu.');
        }

        $partnership->use_link = $request->use_link;
        $partnership->save();

        return redirect()->route('admin.kelola-partnership.index')->with('success', 'Status link pendaftaran berhasil diperbarui.');
    }
}
