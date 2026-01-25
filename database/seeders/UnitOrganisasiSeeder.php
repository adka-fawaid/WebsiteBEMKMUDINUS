<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnitOrganisasi;

class UnitOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitOrganisasi = [
            [
                'nama' => 'PRESIDEN MAHASISWA',
                'kategori' => 'Presiden Mahasiswa',
                'deskripsi' => 'Presiden Mahasiswa BEM KM UDINUS merupakan pemimpin tertinggi organisasi yang bertanggung jawab atas jalannya kepengurusan dan pelaksanaan program kerja.',
                'logo' => 'presiden-mahasiswa.png',
            ],
            [
                'nama' => 'WAKIL PRESIDEN MAHASISWA',
                'kategori' => 'Wakil Presiden Mahasiswa',
                'deskripsi' => 'Wakil Presiden Mahasiswa BEM KM UDINUS bertugas membantu Presiden Mahasiswa dalam menjalankan kepengurusan dan bertanggung jawab atas koordinasi internal organisasi.',
                'logo' => 'wakil-presiden-mahasiswa.png',
            ],
            [
                'nama' => 'SEKRETARIS JENDERAL',
                'kategori' => 'Sekretaris Jenderal',
                'deskripsi' => 'Sekretaris Jenderal BEM KM UDINUS bertanggung jawab atas administrasi organisasi dan koordinasi seluruh kegiatan BEM KM UDINUS.',
                'logo' => 'sekretaris-jenderal.png',
            ],
            [
                'nama' => 'BIRO ADMINISTRASI',
                'kategori' => 'Biro',
                'deskripsi' => 'Biro Administrasi bertugas mengelola administrasi, persuratan, dan dokumentasi kegiatan BEM KM UDINUS.',
                'logo' => 'biro-administrasi.png',
            ],
            [
                'nama' => 'BIRO KEUANGAN',
                'kategori' => 'Biro',
                'deskripsi' => 'Biro Keuangan bertanggung jawab atas pengelolaan keuangan, pelaporan keuangan, dan pengawasan anggaran BEM KM UDINUS.',
                'logo' => 'biro-keuangan.png',
            ],
            [
                'nama' => 'BIRO MEDKOM',
                'kategori' => 'Biro',
                'deskripsi' => 'Biro Media dan Komunikasi bertugas mengelola media sosial, publikasi, dan komunikasi eksternal BEM KM UDINUS.',
                'logo' => 'biro-medkom.png',
            ],
            [
                'nama' => 'BIRO PSDM',
                'kategori' => 'Biro',
                'deskripsi' => 'Biro Pengembangan Sumber Daya Mahasiswa bertugas mengembangkan kapasitas dan kompetensi anggota BEM KM UDINUS.',
                'logo' => 'biro-psdm.png',
            ],
            [
                'nama' => 'KEMENKOAN PERGERAKAN',
                'kategori' => 'Kementerian Koordinator',
                'deskripsi' => 'Kementerian Koordinator Pergerakan bertugas mengkoordinasikan kementerian-kementerian yang berfokus pada isu sosial dan pergerakan mahasiswa.',
                'logo' => 'kemenkoan-pergerakan.png',
            ],
            [
                'nama' => 'KEMENKOAN PENAUNGAN & KESEJAHTERAAN',
                'kategori' => 'Kementerian Koordinator',
                'deskripsi' => 'Kementerian Koordinator Penaungan & Kesejahteraan bertugas mengkoordinasikan program-program yang berfokus pada kesejahteraan mahasiswa.',
                'logo' => 'kemenkoan-penaungan-kesejahteraan.png',
            ],
            [
                'nama' => 'KEMENKOAN RELASI & RELASI',
                'kategori' => 'Kementerian Koordinator',
                'deskripsi' => 'Kementerian Koordinator Relasi bertugas mengkoordinasikan hubungan eksternal dan kemitraan BEM KM UDINUS.',
                'logo' => 'kemenkoan-relasi-relasi.png',
            ],
            [
                'nama' => 'KEMENTERIAN SOSIAL POLITIK',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Sosial Politik bertugas mengkaji dan merespon isu-isu sosial politik yang berkembang di masyarakat dan kampus.',
                'logo' => 'kementerian-sosial-politik.png',
            ],
            [
                'nama' => 'KEMENTERIAN PP&I',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Pengembangan Pemuda dan Intelektual bertugas mengembangkan kapasitas intelektual dan kepemimpinan mahasiswa.',
                'logo' => 'kementerian-ppi.png',
            ],
            [
                'nama' => 'KEMENTERIAN SOSIAL MASYARAKAT',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Sosial Masyarakat bertugas menjalankan program-program pengabdian masyarakat dan pemberdayaan sosial.',
                'logo' => 'kementerian-sosial-masyarakat.png',
            ],
            [
                'nama' => 'KEMENTERIAN DALAM NEGERI',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Dalam Negeri bertugas mengelola hubungan internal kampus dan koordinasi dengan unit-unit di dalam universitas.',
                'logo' => 'kementerian-dalam-negeri.png',
            ],
            [
                'nama' => 'KEMENTERIAN KESPORA',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Kesehatan dan Olahraga bertugas mengelola program-program kesehatan dan olahraga untuk mahasiswa.',
                'logo' => 'kementerian-kespora.png',
            ],
            [
                'nama' => 'KEMENTERIAN ADVOKESMA',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Advokasi Kesejahteraan Mahasiswa bertugas mengadvokasi kepentingan dan kesejahteraan mahasiswa.',
                'logo' => 'kementerian-advokesma.png',
            ],
            [
                'nama' => 'KEMENTERIAN LUAR NEGERI',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Luar Negeri bertugas mengelola hubungan eksternal dengan organisasi mahasiswa di luar universitas.',
                'logo' => 'kementerian-luar-negeri.png',
            ],
            [
                'nama' => 'KEMENTERIAN KREASI',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Kreativitas dan Inovasi bertugas mengembangkan kreativitas dan inovasi mahasiswa melalui berbagai program kerja.',
                'logo' => 'kementerian-kreasi.png',
            ],
            [
                'nama' => 'KEMENTERIAN BUMKM',
                'kategori' => 'Kementerian',
                'deskripsi' => 'Kementerian Badan Usaha Milik Keluarga Mahasiswa bertugas mengembangkan kewirausahaan dan ekonomi kreatif mahasiswa.',
                'logo' => 'kementerian-bumkm.png',
            ],
        ];

        foreach ($unitOrganisasi as $unit) {
            UnitOrganisasi::create($unit);
        }
    }
}
