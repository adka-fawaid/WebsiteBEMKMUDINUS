<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use App\Models\ProsedurPartnership;
use Illuminate\Http\Request;

class ProsedurPartnershipAdminController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();

        return view('admin.prosedur-partnership.index', compact('partnerships'));
    }

    public function prosedur(Request $request, $partnershipId)
    {
        $partnership = Partnership::findOrFail($partnershipId);
        $prosedurMedpartGratis = ProsedurPartnership::where('partnership_id', $partnershipId)
            ->where('kategori', 'Medpart Gratis')
            ->get();
        $prosedurMedpartBerbayar = ProsedurPartnership::where('partnership_id', $partnershipId)
            ->where('kategori', 'Medpart Berbayar')
            ->get();
        $listProsedur = ProsedurPartnership::where('partnership_id', $partnershipId)->get();

        if ($partnership->kategori == 'Media Partner') {
            return view('admin.prosedur-partnership.media-partner.index', compact('partnership', 'prosedurMedpartGratis', 'prosedurMedpartBerbayar'));
        } else {
            return view('admin.prosedur-partnership.prosedur.index', compact('partnership', 'listProsedur'));
        }
    }

    /**
     * MEDIA PARTNER GRATIS
     */
    public function storeMedpartGratis(Request $request, $partnershipId)
    {
        $validatedData = $request->validate([
            'prosedur' => 'required|string',
        ]);

        ProsedurPartnership::create([
            'partnership_id' => $partnershipId,
            'kategori' => 'Medpart Gratis',
            'prosedur' => $validatedData['prosedur'],
        ]);

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', 'Prosedur Media Partner Gratis berhasil ditambahkan.');
    }

    public function updateMedpartGratis(Request $request, $partnershipId, $id)
    {
        $prosedur = ProsedurPartnership::findOrFail($id);

        $validatedData = $request->validate([
            'prosedur' => 'required|string',
        ]);

        $prosedur->prosedur = $validatedData['prosedur'];
        $prosedur->save();

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', 'Prosedur Media Partner Gratis berhasil diperbarui.');
    }

    public function destroyMedpartGratis($partnershipId, $id)
    {
        $prosedur = ProsedurPartnership::findOrFail($id);
        $partnershipId = $prosedur->partnership_id;
        $prosedur->delete();

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', 'Prosedur Media Partner Gratis berhasil dihapus.');
    }

    /**
     * MEDIA PARTNER BERBAYAR
     */
    public function storeMedpartBerbayar(Request $request, $partnershipId)
    {
        $validatedData = $request->validate([
            'prosedur' => 'required|string',
        ]);

        ProsedurPartnership::create([
            'partnership_id' => $partnershipId,
            'kategori' => 'Medpart Berbayar',
            'prosedur' => $validatedData['prosedur'],
        ]);

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', 'Prosedur Media Partner Berbayar berhasil ditambahkan.');
    }

    public function updateMedpartBerbayar(Request $request, $partnershipId, $id)
    {
        $prosedur = ProsedurPartnership::findOrFail($id);

        $validatedData = $request->validate([
            'prosedur' => 'required|string',
        ]);

        $prosedur->prosedur = $validatedData['prosedur'];
        $prosedur->save();

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', 'Prosedur Media Partner Berbayar berhasil diperbarui.');
    }

    public function destroyMedpartBerbayar($partnershipId, $id)
    {
        $prosedur = ProsedurPartnership::findOrFail($id);
        $prosedur->delete();

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', 'Prosedur Media Partner Berbayar berhasil dihapus.');
    }


    /**
     * SPONSORSHIP, KOLABORASI, KAMPUS VISIT, DELEGASI
     */
    public function storeProsedur(Request $request, $partnershipId)
    {
        $partnership = Partnership::findOrFail($partnershipId);

        $validatedData = $request->validate([
            'prosedur' => 'required|string',
        ]);

        ProsedurPartnership::create([
            'partnership_id' => $partnershipId,
            'kategori' => $partnership->kategori,
            'prosedur' => $validatedData['prosedur'],
        ]);

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', "Prosedur {$partnership->kategori} berhasil ditambahkan.");
    }

    public function updateProsedur(Request $request, $partnershipId, $id)
    {
        $prosedur = ProsedurPartnership::findOrFail($id);

        $validatedData = $request->validate([
            'prosedur' => 'required|string',
        ]);

        $prosedur->prosedur = $validatedData['prosedur'];
        $prosedur->save();

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', "Prosedur {$prosedur->kategori} berhasil diperbarui.");
    }

    public function destroyProsedur($partnershipId, $id)
    {
        $prosedur = ProsedurPartnership::findOrFail($id);
        $kategori = $prosedur->kategori;
        $prosedur->delete();

        return redirect()->route('admin.prosedur-partnership.prosedur', $partnershipId)->with('success', "Prosedur $kategori berhasil dihapus.");
    }
}
