<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\UnitOrganisasi;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    public function index()
    {
        $unitOrganisasiList = UnitOrganisasi::all();

        return view('guest.profil.struktural.index', compact(
            'unitOrganisasiList',
        ));
    }

    public function detail($id)
    {
        $anggotaUnits = UnitOrganisasi::findOrFail($id)->anggotaUnit;

         return view('guest.profil.struktural.detail', compact(
            'anggotaUnits',
        ));
    }
}
