<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kabinet;

class KabinetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kabinet::create([
            'logo' => 'aksa-sinergi.png',
            'nama' => 'Kabinet Aksa Sinergi',
            'periode' => '2025/2026',
            'deskripsi' => 'Nama "Aksa Sinergi" mencerminkan pandangan luas (Aksa) terhadap perubahan dan tekad untuk membangun kolaborasi (Sinergi) dalam setiap langkah organisasi.
            Logo Kabinet Aksa Sinergi terinspirasi dari simbol energi dan pergerakan yang berpadu dalam harmoni. Setiap lengkungan menyerupai sayap mempresentasikan semangat jiwa mahasiswa yang dinamis, saling terhubung, dan membentuk pusaran sinergi yang kuat.',
        ]);
    }
}
