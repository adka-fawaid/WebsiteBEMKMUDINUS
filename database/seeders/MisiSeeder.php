<?php

namespace Database\Seeders;

use App\Models\Misi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $misiList = [
            'Mewujudkan tata kelola organisasi yang profesional, transparan, dan berintegritas melalui sinergi kepemimpinan partisipatif dan budaya kerja kolektif.',
            'Mendorong pengembangan potensi mahasiswa melalui pelatihan, literasi teknologi, dan soft skill berbasis sinergi antar elemen.',
            'Menggerakkan aksi kolektif berbasis data, riset kritis, dan kolaborasi lintas minat melalui sinergi gerakan yang responsif dan berdampak.',
            'Menjembatani aspirasi mahasiswa secara kritis dan konstruktif melalui sinergi komunikasi dengan pihak kampus.',
            'Melaksanakan program sosial dan pemberdayaan masyarakat melalui sinergi multipihak yang selaras dengan nilai Tri Dharma Perguruan Tinggi.',
        ];

        foreach ($misiList as $misi) {
            Misi::create([
                'misi' => $misi,
            ]);
        }
    }
}
