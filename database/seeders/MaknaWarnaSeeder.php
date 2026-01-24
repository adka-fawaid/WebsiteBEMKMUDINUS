<?php

namespace Database\Seeders;

use App\Models\Kabinet;
use App\Models\MaknaWarna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaknaWarnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabinet = Kabinet::first();

        $maknaWarnaList = [
            [
                'warna' => 'Biru Tua',
                'makna' => 'Melambangkan ketenangan, kepercayaan, serta stabilitas, yang merepresentasikan karakter organisasi yang profesional, kokoh, dan mampu menjadi ruang yang menyatukan berbagai pemikiran mahasiswa.',
            ],
            [
                'warna' => 'Orange',
                'makna' => 'Menghadirkan kesan hangat, energik, dan penuh semangat. Oranye menjadi simbol kreativitas, optimisme, serta keberanian untuk bergerak dan menciptakan perubahan.',
            ],
        ];

        foreach ($maknaWarnaList as $maknaWarna) {
            MaknaWarna::create([
                'kabinet_id' => $kabinet->id,
                'warna' => $maknaWarna['warna'],
                'makna' => $maknaWarna['makna'],
            ]);
        }
    }
}
