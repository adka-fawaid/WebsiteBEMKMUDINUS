<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kabinet;
use App\Models\Ormawa;
use App\Models\Partnership;
use App\Models\Photo;
use App\Models\BeritaKajian;
use App\Models\Proker;
use App\Models\Ukm;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome');
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
        // Show the manual Partnership page (guest). PDF text should be placed
        // into resources/views/guest/partnership/manual.blade.php
        return view('guest.partnership.manual');
    }

    public function store_partnership(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120'
        ]);

        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9\-_\.]/', '', $file->getClientOriginalName());
            $file->storeAs('public/partnership', $fileName);
        }

        \App\Models\Partnership::create([
            'judul' => $request->input('judul'),
            'desc' => $request->input('desc'),
            'image' => $fileName,
            'contact' => $request->input('contact') ?? null,
            'slug' => \Str::slug($request->input('judul')) . '-' . time()
        ]);

        return redirect('/partnership')->with('success', 'Pengajuan partnership berhasil dikirim.');
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
        $forums = BeritaKajian::latest()->get();

        return view('forum.forum', compact('forums'));
    }

    public function detail_forum($slug)
    {
        $forum = BeritaKajian::where('slug', $slug)->firstOrFail();

        return view('forum.detail_forum', compact('forum'));
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
