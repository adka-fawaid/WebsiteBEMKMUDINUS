<?php

namespace App\Http\Controllers\Guest;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }

        // Filter by kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $beritas = $query->latest()->get();
        $kategoris = Berita::select('kategori')->distinct()->pluck('kategori');

        return view('guest.berita.index', compact('beritas', 'kategoris'));
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('guest.berita.detail', compact('berita'));
    }
}
