<?php

namespace Database\Seeders;

use App\Models\KategoriPartnership;
use App\Models\Partnership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create kategori partnerships
        $kategori1 = KategoriPartnership::create([
            'nama' => 'Media Partner',
            'deskripsi' => 'Kerjasama dengan media massa untuk publikasi berita dan event BEM KM UDINUS',
        ]);

        $kategori2 = KategoriPartnership::create([
            'nama' => 'Sponsor',
            'deskripsi' => 'Kerjasama dengan sponsor untuk program dan kegiatan BEM KM UDINUS',
        ]);

        $kategori3 = KategoriPartnership::create([
            'nama' => 'Organisasi Eksternal',
            'deskripsi' => 'Kerjasama dengan organisasi eksternal untuk kolaborasi program',
        ]);

        // Create partnerships
        Partnership::create([
            'kategori_partnership_id' => $kategori1->id,
            'nama' => 'Media Udinus',
            'deskripsi' => 'Portal media resmi Universitas Diponegoro untuk publikasi berita mahasiswa',
            'link' => 'https://media.udinus.ac.id',
                        'slug' => 'media-udinus-' . time(),
            'status' => 'approved',
        ]);

        Partnership::create([
            'kategori_partnership_id' => $kategori1->id,
            'nama' => 'Instagram Udinus',
            'deskripsi' => 'Akun Instagram resmi Universitas Diponegoro untuk publikasi foto dan video kegiatan',
            'link' => 'https://instagram.com/undipofficial',
                        'slug' => 'instagram-udinus-' . time(),
            'status' => 'approved',
        ]);

        Partnership::create([
            'kategori_partnership_id' => $kategori2->id,
            'nama' => 'PT. Telekomunikasi Indonesia',
            'deskripsi' => 'Sponsor utama untuk program dan kegiatan BEM KM UDINUS tahun 2025',
            'link' => 'https://www.telkomsel.com',
                        'slug' => 'pt-telekomunikasi-indonesia-' . time(),
            'status' => 'approved',
        ]);

        Partnership::create([
            'kategori_partnership_id' => $kategori2->id,
            'nama' => 'Bank BCA',
            'deskripsi' => 'Partnership untuk workshop finansial dan edukasi perbankan',
            'link' => 'https://www.bca.co.id',
                        'slug' => 'bank-bca-' . time(),
            'status' => 'approved',
        ]);

        Partnership::create([
            'kategori_partnership_id' => $kategori3->id,
            'nama' => 'HIMAPRO UDINUS',
            'deskripsi' => 'Kerjasama dengan Himpunan Mahasiswa Program Studi Teknik Informatika',
            'link' => null,
                        'slug' => 'himapro-udinus-' . time(),
            'status' => 'pending',
        ]);

        Partnership::create([
            'kategori_partnership_id' => $kategori3->id,
            'nama' => 'ORMAWA UDINUS',
            'deskripsi' => 'Kolaborasi dengan organisasi mahasiswa lainnya di kampus',
                        'slug' => 'ormawa-udinus-' . time(),
            'link' => null,
            'status' => 'approved',
        ]);
    }
}
