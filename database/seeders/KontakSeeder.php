<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kontaks = [
            [
                'tipe' => 'Telepon',
                'kontak' => '+62 812-3456-7890',
                'nama' => 'BEMKM Udinus',
                'url' => 'https://wa.me/6281234567890',
            ],
            [
                'tipe' => 'Email',
                'kontak' => 'bemkm@dinus.ac.id',
                'nama' => 'Email BEMKM Udinus',
                'url' => 'https://mail.google.com',
            ],
            [
                'tipe' => 'Instagram',
                'kontak' => '@bemkm.udinus',
                'nama' => 'Instagram BEMKM Udinus',
                'url' => 'https://instagram.com/bemkm.udinus',
            ],
            [
                'tipe' => 'TikTok',
                'kontak' => '@bemkm.udinus',
                'nama' => 'TikTok BEMKM Udinus',
                'url' => 'https://tiktok.com/@bemkm.udinus',
            ],
            [
                'tipe' => 'YouTube',
                'kontak' => '@BEMKMUdinus',
                'nama' => 'YouTube BEMKM Udinus',
                'url' => 'https://youtube.com/@BEMKMUdinus',
            ],
            [
                'tipe' => 'LinkedIn',
                'kontak' => '@bemkm.udinus',
                'nama' => 'LinkedIn BEMKM Udinus',
                'url' => 'https://linkedin.com/company/bemkm-udinus',
            ],
        ];

        foreach ($kontaks as $kontak) {
            Kontak::updateOrCreate(
                [
                    'tipe' => $kontak['tipe'],
                    'kontak' => $kontak['kontak'],
                ],
                $kontak
            );
        }
    }
}
