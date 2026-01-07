<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class KontakController extends Controller
{
    public function index()
    {
        return view('guest.kontak.kontak', [
            'kontaks' => Blog::where('kategori', 'kontak')->orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $kontak = Blog::where('slug', $slug)->first();
        return view('guest.kontak.detail_kontak', [
            'kontak' => $kontak
        ]);
    }
}
