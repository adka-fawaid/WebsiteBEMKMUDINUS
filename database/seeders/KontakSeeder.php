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
                'tipe' => 'Nomor Telepon',
                'nilai' => '+62 812-3456-7890',
                'username' => 'BEMKM Udinus',
                'platform' => 'https://wa.me/6281234567890',
            ],
            [
                'tipe' => 'Email',
                'nilai' => 'bemkm@dinus.ac.id',
                'username' => 'bemkm',
                'platform' => 'https:://mail',
            ],
            [
                'tipe' => 'Instagram',
                'nilai' => '@bemkm.udinus',
                'username' => 'Instagram BEMKM Udinus',
                'platform' => 'https://instagram.com/bemkm.udinus',
            ],
            [
                'tipe' => 'TikTok',
                'nilai' => '@bemkm.udinus',
                'username' => 'TikTok BEMKM Udinus',
                'platform' => 'https://tiktok.com/@bemkm.udinus',
            ],
            [
                'tipe' => 'YouTube',
                'nilai' => '@BEMKMUdinus',
                'username' => 'YouTube BEMKM Udinus',
                'platform' => 'https://youtube.com/@BEMKMUdinus',
            ],
            [
                'tipe' => 'LinkedIn',
                'nilai' => '@bemkm.udinus',
                'username' => 'LinkedIn BEMKM Udinus',
                'platform' => 'https://linkedin.com/company/bemkm-udinus',
            ],
        ];

        foreach ($kontaks as $kontak) {
            Kontak::updateOrCreate(
                [
                    'tipe' => $kontak['tipe'],
                    'nilai' => $kontak['nilai'],
                ],
                $kontak
            );
        }
    }
}
