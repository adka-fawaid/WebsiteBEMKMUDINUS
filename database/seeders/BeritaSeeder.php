<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::insert([
            [
                'slug' => Str::slug('Pelantikan Fungsionari BEM-KM UDINUS Periode 2025'),
                'judul' => 'Pelantikan Fungsionaris BEM-KM UDINUS Periode 2025',
                'kategori' => 'Berita Acara',
                'gambar' => 'pelantikan-fungsionaris.png',
                'deskripsi' => 'Pelantikan Fungsionaris BEM-KM UDINUS periode 2025 telah dilaksanakan dengan penuh khidmat. Acara ini menandai dimulainya kepemimpinan baru yang siap mengabdi untuk kemajuan mahasiswa Universitas Dian Nuswantoro.',
                'dokumen' => 'pelantikan-fungsionaris.pdf',
                'url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Kajian Makan Bergizi Gratis'),
                'judul' => 'Kajian Makan Bergizi Gratis',
                'kategori' => 'Berita Kajian',
                'gambar' => 'makan-beracun-gratis.png',
                'deskripsi' => 'BEM-KM UDINUS mengadakan kajian tentang program makan bergizi gratis dari Presiden Prabowo Subianto yang banyak menuai pro dan kontra. Kajian ini bertujuan untuk memberikan pemahaman yang lebih mendalam kepada mahasiswa mengenai manfaat dan tantangan dari program tersebut.',
                'dokumen' => 'makan-beracun-gratis.pdf',
                'url' => 'https://www.instagram.com/p/example2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Press Release Pemberhentian Anggota BEM-KM UDINUS'),
                'judul' => 'Press Release Pemberhentian Anggota BEM-KM UDINUS',
                'kategori' => 'Press Release',
                'gambar' => 'press-release.png',
                'deskripsi' => 'BEM-KM UDINUS mengeluarkan press release resmi terkait pemberhentian beberapa anggota yang tidak menjalankan tugas dan tanggung jawabnya sesuai dengan kode etik organisasi. Keputusan ini diambil demi menjaga integritas dan kredibilitas BEM-KM UDINUS di mata mahasiswa dan civitas akademika.',
                'dokumen' => 'press-release.pdf',
                'url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
