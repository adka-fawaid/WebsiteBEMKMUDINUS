<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use App\Models\ProsedurPartnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();

        return view('guest.partnership.index', compact(
            'partnerships'
        ));
    }

    public function mediaPartner()
    {
        return view('guest.partnership.media-partner.index');
    }

    public function prosedurMediaPartner($kategori)
    {
        // Validasi kategori
        $validKategori = ['gratis', 'berbayar'];
        if (!in_array(strtolower($kategori), $validKategori)) {
            abort(404);
        }

        // Konversi kategori ke format database
        $kategoriDb = $kategori === 'gratis' ? 'Medpart Gratis' : 'Medpart Berbayar';

        // Ambil prosedur berdasarkan kategori
        $prosedurs = ProsedurPartnership::where('kategori', $kategoriDb)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('guest.partnership.media-partner.prosedur.index', compact('prosedurs', 'kategori', 'kategoriDb'));
    }

    public function prosedur($kategori)
    {
        // Validasi kategori
        $validKategori = ['sponsorship', 'kolaborasi', 'kampus-visit', 'delegasi'];
        if (!in_array(strtolower($kategori), $validKategori)) {
            abort(404);
        }

        // Konversi kategori ke format database
        $kategoriDb = match ($kategori) {
            'sponsorship' => 'Sponsorship',
            'kolaborasi' => 'Kolaborasi',
            'kampus-visit' => 'Kampus Visit',
            'delegasi' => 'Delegasi',
            default => abort(404)
        };

        // Ambil prosedur berdasarkan kategori
        $prosedurs = ProsedurPartnership::where('kategori', $kategoriDb)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('guest.partnership.prosedur.index', compact('prosedurs', 'kategori', 'kategoriDb'));
    }
}
