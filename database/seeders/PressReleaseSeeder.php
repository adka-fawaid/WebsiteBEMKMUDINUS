<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class PressReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cek jika sudah ada untuk menghindari duplikasi
        if (Blog::where('slug', 'press-release-pemberhentian-bem-km-2025-2026')->exists()) {
            return;
        }

        Blog::create([
            'judul' => 'Pemberhentian Pengurus BEM KM UDINUS Periode 2025/2026',
            'slug' => 'press-release-pemberhentian-bem-km-2025-2026',
            'image' => 'press-1.png',
            'desc' => '<p>Dengan penuh pertimbangan serta mengacu pada ketentuan dan mekanisme organisasi yang berlaku, BEM KM UDINUS secara resmi mengumumkan Pemberhentian Pengurus BEM KM UDINUS Periode 2025/2026.</p><p>Keputusan ini diambil sebagai langkah organisasi dalam menjaga profesionalisme, integritas, serta keberlanjutan roda organisasi, agar pelaksanaan tugas dan tanggung jawab BEM KM UDINUS tetap berjalan secara optimal dan sesuai dengan nilai-nilai organisasi.</p><p>Kami berharap keputusan ini dapat dipahami oleh seluruh pihak terkait. Atas perhatian dan kerja sama seluruh pihak, kami ucapkan terima kasih.</p>',
        ]);
    }
}
