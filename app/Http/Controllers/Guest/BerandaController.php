<?php

namespace App\Http\Controllers\Guest;

use App\Models\Berita;
use App\Models\Kabinet;
use App\Models\MaknaWarna;
use App\Models\MaknaSimbol;
use Illuminate\Http\Request;
use App\Models\PresidenMahasiswa;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $kabinet = Kabinet::first();
        $sambutan = PresidenMahasiswa::latest()->first();
        $maknaSimbolList = MaknaSimbol::all();
        $maknaWarnaList = MaknaWarna::all();
        $beritaTerbaru = Berita::latest()->take(3)->get();

        return view('guest.beranda.index', compact(
            'kabinet',
            'sambutan',
            'maknaSimbolList',
            'maknaWarnaList',
            'beritaTerbaru',
        ));
    }
}
