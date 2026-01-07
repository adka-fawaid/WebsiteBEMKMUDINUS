<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class ThreeBeritaSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'judul' => 'Pemberhentian Pengurus BEM KM UDINUS Periode 2025/2026',
                'slug' => 'press-release-pemberhentian-bem-km-2025-2026',
                'image' => 'press-1.png',
                'desc' => '<p>Dengan penuh pertimbangan serta mengacu pada ketentuan dan mekanisme organisasi yang berlaku, BEM KM UDINUS secara resmi mengumumkan Pemberhentian Pengurus BEM KM UDINUS Periode 2025/2026.</p><p>Keputusan ini diambil sebagai langkah organisasi dalam menjaga profesionalisme, integritas, serta keberlanjutan roda organisasi, agar pelaksanaan tugas dan tanggung jawab BEM KM UDINUS tetap berjalan secara optimal dan sesuai dengan nilai-nilai organisasi.</p><p>Kami berharap keputusan ini dapat dipahami oleh seluruh pihak terkait. Atas perhatian dan kerja sama seluruh pihak, kami ucapkan terima kasih.</p>'
            ],
            [
                'judul' => 'Masih suka bingung mau nugas, meeting organisasi, atau sekedar rehat dimana?',
                'slug' => 'spot-cozy-udin-us',
                'image' => 'spot-library.png',
                'desc' => '<p>Masih suka bingung mau nugas, meeting organisasi, atau sekedar rehat dimana?

Tenang, Sunny udah siapin beberapa spot paling cozy di Udinus buat kamu. Mulai dari perpustakaan yang lengkap, rooftop buat healing tipis-tipis, sampai café nyaman buat nugas, semuanya ada! 
Yuk eksplor kampus kita lebih jauh~</p>'
            ],
            [
                'judul' => 'MUSYAWARAH BESAR SOP BEM KM UDINUS 2025/2026',
                'slug' => 'musyawarah-besar-sop-bem-km-2025-2026',
                'image' => 'mubes.png',
                'desc' => '<p>Telah sukses dilaksanakan kegiatan MUSYAWARAH BESAR BEM KM Universitas Dian Nuswantoro 2025/2026 pada tanggal 19 November 2025.</p><p>Melalui pelaksanaan MUBES ini secara resmi disahkan berbagai regulasi penting yang menjadi pedoman dalam menjalankan roda organisasi, meliputi Tata Tertib, Standar Operasional Prosedur (SOP) Instrumen Organisasi, serta Standar Operasional Prosedur (SOP) Tata Kelola Keanggotaan BEM KM UDINUS Periode 2025/2026.</p><p><strong>Credit</strong><br>Designer : Surya Putra</p>'
            ],
        ];

        foreach ($items as $it) {
            Blog::updateOrCreate(
                ['slug' => $it['slug']],
                [
                    'judul' => $it['judul'],
                    'image' => $it['image'],
                    'desc' => $it['desc']
                ]
            );
        }
    }
}
