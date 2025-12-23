<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kabinet;
use App\Models\Ormawa;
use App\Models\Partnership;
use App\Models\Photo;
use App\Models\Forum;
use App\Models\Proker;
use App\Models\Ukm;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'partnerships' => Partnership::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }

    public function berita()
    {
        return view('berita.berita');
    }

    public function detail($slug)
    {
        return view('berita.detail');
    }

    public function partnership()
    {
        return view('partnership.partnership', [
            'partnerships' => Partnership::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_partnership($slug)
    {
        $partnership = Partnership::where('slug', $slug)->first();
        return view('partnership.detail_partnership', [
            'partnership' => $partnership
        ]);
    }

    public function forum()
    {
        return view('forum.forum');
    }

    public function detail_forum($slug)
    {
        return view('forum.detail_forum');
    }

    public function foto()
    {
        return view('foto.foto');
    }

    public function calendar()
    {
        return view('calendar.calendar');
    }

    public function kabinet()
    {
        return view('kabinet.kabinet', [
            'kabinets' => Kabinet::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_kabinet($slug)
    {
        $kabinet = Kabinet::where('slug', $slug)->first();
        return view('kabinet.detail_kabinet', [
            'kabinet' => $kabinet
        ]);
    }

    public function ormawa()
    {
        return view('ormawa.ormawa');
    }

    public function detail_ormawa($slug)
    {
        return view('ormawa.detail_ormawa');
    }

    public function proker()
    {
        return view('proker.proker');
    }

    public function detail_proker($slug)
    {
        return view('proker.detail_proker');
    }
    public function ukm()
    {
        return view('ukm.ukm');
    }

    public function detail_ukm($slug)
    {
        return view('ukm.detail_ukm');
    }
}
