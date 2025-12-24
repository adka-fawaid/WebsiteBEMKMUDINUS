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
            'deskripsi' => 'Kabinet Aksa Sinergi merupakan perwujudan semangat kolaborasi dan harmoni dalam memajukan organisasi kemahasiswaan. Nama "Aksa" berarti puncak atau kesempurnaan, sedangkan "Sinergi" melambangkan kekuatan dari kerja sama yang solid. Kabinet ini berfokus pada penguatan komunikasi antar elemen kampus, pengembangan soft skill mahasiswa, serta menciptakan program kerja yang inovatif dan berdampak. Dengan mengedepankan profesionalitas dan integritas, Kabinet Aksa Sinergi berkomitmen menjadi wadah aspirasi mahasiswa serta jembatan antara mahasiswa dengan pihak kampus untuk mewujudkan kampus yang lebih maju dan bermartabat.',
        ]);
    }
}
