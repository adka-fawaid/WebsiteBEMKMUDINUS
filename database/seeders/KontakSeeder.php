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
                'url' => 'https://wa.me/6288225050288',
            ],
            [
                'tipe' => 'Email',
                'kontak' => 'bemkm@orma.dinus.ac.id',
                'nama' => 'Email BEMKM Udinus',
                'url' => 'https://mail.google.com/mail/?view=cm&to=bemkm@orma.dinus.ac.id',
            ],
            [
                'tipe' => 'Instagram',
                'kontak' => '@bemkmudinus',
                'nama' => 'Instagram BEMKM Udinus',
                'url' => 'https://www.instagram.com/bemkmudinus',
            ],
            [
                'tipe' => 'TikTok',
                'kontak' => '@bemkmudinus',
                'nama' => 'TikTok BEMKM Udinus',
                'url' => 'https://www.tiktok.com/@bemkmudinus',
            ],
            [
                'tipe' => 'YouTube',
                'kontak' => '@bemkmudinusofficial8044',
                'nama' => 'YouTube BEMKM Udinus',
                'url' => 'https://youtube.com/@bemkmudinusofficial8044',
            ],
            [
                'tipe' => 'LinkedIn',
                'kontak' => '@bemkmudinus',
                'nama' => 'LinkedIn BEMKM Udinus',
                'url' => 'https://id.linkedin.com/company/bemkmudinus',
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
