<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('guest.berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('guest.berita.detail', [
            'artikel' => $artikel
        ]);
    }

    public function pressRelease()
    {
        $data = [
            'title' => 'PRESS RELEASE',
            'subtitle' => 'Pemberhentian Pengurus BEM KM UDINUS Periode 2025/2026',
            'body' => "Dengan penuh pertimbangan serta mengacu pada ketentuan dan mekanisme organisasi yang berlaku, BEM KM UDINUS secara resmi mengumumkan Pemberhentian Pengurus BEM KM UDINUS Periode 2025/2026.\n\nKeputusan ini diambil sebagai langkah organisasi dalam menjaga profesionalisme, integritas, serta keberlanjutan roda organisasi, agar pelaksanaan tugas dan tanggung jawab BEM KM UDINUS tetap berjalan secara optimal dan sesuai dengan nilai-nilai organisasi.\n\nKami berharap keputusan ini dapat dipahami oleh seluruh pihak terkait. Atas perhatian dan kerja sama seluruh pihak, kami ucapkan terima kasih."
        ];

        return view('guest.berita.press', $data);
    }

    public function spot()
    {
        $data = [
            'title' => 'Tempat Cozy di Udinus',
            'lead' => "Masih suka bingung mau nugas, meeting organisasi, atau sekedar rehat dimana?\n\nTenang, Sunny udah siapin beberapa spot paling cozy di Udinus buat kamu. Mulai dari perpustakaan yang lengkap, rooftop buat healing tipis-tipis, sampai café nyaman buat nugas, semuanya ada! Yuk eksplor kampus kita lebih jauh~",
            'credit_designer' => 'Rohmatun Nabila',
            'credit_copy' => 'Ayu Kirania',
            'organization' => 'BEM KM UDINUS 2025/2026 - KABINET AKSA SINERGI'
        ];

        return view('guest.berita.spot', $data);
    }
}
