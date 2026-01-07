<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Proker;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('guest.kegiatan.kegiatan', [
            'kegiatans' => Proker::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $kegiatan = Proker::where('slug', $slug)->first();
        return view('guest.kegiatan.detail_kegiatan', [
            'kegiatan' => $kegiatan
        ]);
    }
}
