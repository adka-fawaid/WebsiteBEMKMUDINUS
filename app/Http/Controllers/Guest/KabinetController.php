<?php

namespace App\Http\Controllers\Guest;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Kabinet;
use App\Models\MaknaWarna;
use App\Models\MaknaSimbol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KabinetController extends Controller
{
    public function index()
    {
        $kabinet = Kabinet::first();
        $visiList = Visi::all();
        $misiList = Misi::all();
        $maknaSimbolList = MaknaSimbol::all();
        $maknaWarnaList = MaknaWarna::all();

        return view('guest.profil.kabinet.index', compact(
            'kabinet',
            'visiList',
            'misiList',
            'maknaSimbolList',
            'maknaWarnaList'
        ));
    }
}
