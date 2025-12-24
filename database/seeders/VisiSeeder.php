<?php

namespace Database\Seeders;

use App\Models\Visi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visi::create([
            'visi' => 'Menjadikan BEM KM UDINUS penggerak kolaboratif, progresif, dan solutif, yang menguatkan mahasiswa sebagai katalis perubahan sosial-akademik melalui karya nyata dan inovasi berkelanjutan bagi kampus dan masyarakat.',
        ]);
    }
}
