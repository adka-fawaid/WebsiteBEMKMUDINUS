<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PresidenMahasiswa;

class PresidenMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PresidenMahasiswa::updateOrCreate(
            ['nim' => 'B11.2022.07879'],
            [
                'nama' => "LUKLU'UN AULA",
                'program_studi' => 'Manajemen',
                'angkatan' => '2022',
                'sambutan' => 'BEM KM UDINUS merupakan lembaga eksekutif tertinggi di tingkat universitas yang memiliki tujuan untuk memberikan kontribusi nyata bagi kesejahteraan seluruh warga UDINUS dan Indonesia. Oleh karena itu, menjadi tanggung jawab BEM KM UDINUS untuk menjadi wadah aspirasi, kolaborasi, fasilitasi, dan advokasi bagi seluruh sivitas akademika UDINUS dengan harapan mampu menciptakan lingkungan yang akademis, berintegritas, kreatif, nyaman, dan kondusif. 
                Dalam hal ini, kami berkomitmen untuk menjadi pemimpin yang tidak hanya mendengar tetapi juga bertindak. Dengan semangat kolaborasi, inovasi, dan keberanian, kami yakin dapat membawa BEM KM UDINUS ke arah yang lebih kolaboratif, progresif, dan solutif, demi tercapainya kesejahteraan bersama.',
                'foto' => 'lukluun-aula.png',
            ]
        );
    }
}
