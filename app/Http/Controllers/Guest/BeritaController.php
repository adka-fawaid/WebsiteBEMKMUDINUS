<?php

namespace App\Http\Controllers\Guest;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('guest.berita.index');
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('guest.berita.detail', compact('berita'));
    }
}
