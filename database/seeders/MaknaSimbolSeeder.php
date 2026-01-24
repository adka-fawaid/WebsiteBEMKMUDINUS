<?php

namespace Database\Seeders;

use App\Models\Kabinet;
use App\Models\MaknaSimbol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaknaSimbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabinet = Kabinet::first();

        $maknaSimbolList = [
            [
                'simbol' => 'Matahari',
                'makna' => 'Merepresentasikan sumber energi kolektif yang menyinari setiap gerak kabinet. Cahaya yang dipancarkan dimaknai sebagai energi kolaboratif seluruh mahasiswa yang bersatu, sehingga mampu menghadirkan energi kuat untuk menciptakan perubahan nyata dan berkelanjutan.',
            ],
            [
                'simbol' => 'Telapak Tangan',
                'makna' => 'Menggambarkan semangat kebersamaan dan kolaborasi, dimana setiap gerak kabinet lahir dari kerja kolektif, bukan individu. BEM KM UDINUS hadir untuk mengikat persatuan dan menguatkan sinergi.',
            ],
            [
                'simbol' => 'Jembatan',
                'makna' => 'Melambangkan peran BEM KM UDINUS sebagai penghubung antara mahasiswa dan pihak kampus, sekaligus sebagai wadah yang menyatukan beragam latar belakang, pemikiran, serta aspirasi mahasiswa.',
            ],
            [
                'simbol' => 'Tiga Ukiran Akar',
                'makna' => 'Melambangkan Tri Dharma Perguruan Tinggi yang meliputi pendidikan dan pengajaran, penelitian dan pengembangan, serta pengabdian kepada masyarakat.',
            ],
        ];

        foreach ($maknaSimbolList as $maknaSimbol) {
            MaknaSimbol::create([
                'kabinet_id' => $kabinet->id,
                'simbol' => $maknaSimbol['simbol'],
                'makna' => $maknaSimbol['makna'],
            ]);
        }
    }
}
