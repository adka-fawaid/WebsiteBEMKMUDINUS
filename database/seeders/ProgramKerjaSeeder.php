<?php

namespace Database\Seeders;

use App\Models\ProgramKerja;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramKerja::create([
            'nama' => 'Webinar Internasional 2026',
            'kategori' => 'Rencana Kerja Tahunan',
            'deskripsi' => 'Webinar Internasional 2026 adalah acara daring yang menghadirkan pembicara dari berbagai negara untuk membahas isu-isu global dan inovasi terkini.',
            'tanggal_mulai' => '2026-05-10',
            'tanggal_selesai' => '2026-05-10',
            'foto' => 'webinter.jpeg',
            'pendaftaran' => true,
            'link_pendaftaran' => 'https://webinar2026.bemkmudinus.id',
        ]);
    }
}
