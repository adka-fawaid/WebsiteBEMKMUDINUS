<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnitOrganisasi;

class UnitOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitOrganisasi::create([
            'nama' => 'Kementerian Kreativitas dan Inovasi',
            'kategori' => 'Kementerian',
            'deskripsi' => 'Kementerian Kreativitas dan Inovasi (KREASI) merupakan salah satu kementerian di BEM KM UDINUS yang berfokus pada pengembangan kreativitas dan inovasi mahasiswa. Kementerian ini bertugas untuk menyelenggarakan berbagai program kerja yang mendorong mahasiswa untuk berpikir kreatif, inovatif, dan menghasilkan karya-karya yang bermanfaat bagi lingkungan kampus maupun masyarakat luas. Melalui berbagai kegiatan seperti workshop, kompetisi, dan pelatihan, KREASI berupaya mencetak mahasiswa yang memiliki daya saing tinggi dan mampu berkontribusi dalam era digital.',
            'logo' => 'logo-kreasi.png',
        ]);
    }
}
