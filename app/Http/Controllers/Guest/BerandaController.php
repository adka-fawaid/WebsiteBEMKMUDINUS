<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\MaknaSimbol;
use App\Models\MaknaWarna;
use App\Models\PresidenMahasiswa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $sambutan = PresidenMahasiswa::latest()->first();
        $maknaSimbol = MaknaSimbol::all();
        $maknaWarna = MaknaWarna::all();

        return view('guest.beranda.index', compact(
            'sambutan',
            'maknaSimbol',
            'maknaWarna'
        ));
    }
}
