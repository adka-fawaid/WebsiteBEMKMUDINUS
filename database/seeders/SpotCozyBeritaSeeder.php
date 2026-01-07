<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class SpotCozyBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Menambahkan 3 berita spot cozy ke tabel blogs
     */
    public function run(): void
    {
        // Data berita spot cozy
        $spots = [
            [
                'judul' => 'Dinus Library - Tempat Belajar Nyaman',
                'slug' => 'dinus-library-tempat-belajar-nyaman',
                'image' => 'spot-library.png',
                'desc' => '<p>Dinus Library tuh lengkap banget! Ruang baca nyaman, BI Corner aktif, layanan digital, sampai tempat diskusi semua tersedia. Tempat paling pas buat belajar dan berkembang bareng teman-teman.</p>',
            ],
            [
                'judul' => 'Work Space H.6 - Ruang Kerja Kolaboratif',
                'slug' => 'work-space-h6-ruang-kerja-kolaboratif',
                'image' => 'spot-workspace.png',
                'desc' => '<p>Nggak cuma buat kuliah dan lab, tapi juga punya Rooftop Garden yang jadi tempat favorit mahasiswa buat santai, diskusi, atau kelas outdoor dengan view kota!</p>',
            ],
            [
                'judul' => 'Foodcourt & Cafetaria - Spot Favorit Istirahat',
                'slug' => 'foodcourt-cafetaria-spot-favorit-istirahat',
                'image' => 'spot-foodcourt.png',
                'desc' => '<p>Hadır dengan beragam menu terjangkau, ruang duduk luas, dan suasana seru, sering jadi spot favorit mahasiswa buat recharge energi sebelum lanjut kuliah dan praktikum!</p>',
            ],
        ];

        foreach ($spots as $spot) {
            // Cek jika sudah ada
            if (Blog::where('slug', $spot['slug'])->exists()) {
                continue;
            }

            Blog::create($spot);
        }
    }
}
