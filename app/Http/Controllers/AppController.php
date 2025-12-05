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
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->limit(3)->get(),
            'partnerships' => Partnership::orderBy('id', 'desc')->limit(3)->get(),
            'forums' => Forum::orderBy('id', 'desc')->limit(3)->get()
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
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
        return view('forum.forum', [
            'forums' => Forum::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_forum($slug)
    {
        $forum = Forum::where('slug', $slug)->first();
        return view('forum.detail_forum', [
            'forum' => $forum
        ]);
    }

    public function foto()
    {
        return view('foto.foto', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
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
        return view('ormawa.ormawa', [
            'ormawas' => Ormawa::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_ormawa($slug)
    {
        $ormawa = Ormawa::where('slug', $slug)->first();
        return view('ormawa.detail_ormawa', [
            'ormawa' => $ormawa
        ]);
    }

    public function proker()
    {
        return view('proker.proker', [
            'prokers' => Proker::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_proker($slug)
    {
        $proker = Proker::where('slug', $slug)->first();
        return view('proker.detail_proker', [
            'proker' => $proker
        ]);
    }
    public function ukm()
    {
        return view('ukm.ukm', [
            'ukms' => Ukm::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_ukm($slug)
    {
        $ukm = Ukm::where('slug', $slug)->first();
        return view('ukm.detail_ukm', [
            'ukm' => $ukm
        ]);
    }
}
