<?php

namespace Database\Seeders;

use App\Models\KategoriPartnership;
use App\Models\Partnership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partnership::insert([
            [
                'kategori' => 'Media Partner',
                'deskripsi' => 'Kerja Sama Media merupakan kegiatan kerja sama dalam bidang promosi media berupa postingan story instagram.',
                'link_pendaftaran' => 'https://forms.gle/hnysqrJzntXvF9Q18',
                'use_link' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Sponsorship',
                'deskripsi' => 'Kerja Sponsorship merupakan kegiatan menjalin kerja sama kolaborasi, sponsorship secara profesional dengan mitra yang relevan dengan BEM-KM UDINUS.',
                'link_pendaftaran' => 'https://forms.gle/hnysqrJzntXvF9Q18',
                'use_link' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Kolaborasi',
                'deskripsi' => 'Kolaborasi merupakan kegiatan menjalin kerja sama kolaborasi, sponsorship secara profesional dengan mitra yang relevan dengan BEM-KM UDINUS.',
                'link_pendaftaran' => 'https://forms.gle/hnysqrJzntXvF9Q18',
                'use_link' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Kampus Visit',
                'deskripsi' => 'Kampus Visit merupakan kegiatan study banding dengan BEM-KM UDINUS yang dilakukan di UDINUS untuk mengenal budaya, bertukar ide dan pendapat, sehingga mendapatkan output yang bermanfaat baik untuk mitra dan BEM-KM UDINUS.',
                'link_pendaftaran' => 'https://forms.gle/hnysqrJzntXvF9Q18',
                'use_link' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Delegasi',
                'deskripsi' => 'Delegasi merupakan kegiatan menghadiri event tertentu yang dilakukan oleh BEM-KM UDINUS untuk membantu mensukseskan event tersebut.',
                'link_pendaftaran' => 'https://forms.gle/hnysqrJzntXvF9Q18',
                'use_link' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
