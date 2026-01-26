<?php

namespace Database\Seeders;

use App\Models\Partnership;
use App\Models\ProsedurPartnership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProsedurPartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Media Partner partnership
        $mediaPartner = Partnership::where('kategori', 'Media Partner')->first();

        if ($mediaPartner) {
            // Medpart Gratis
            ProsedurPartnership::insert([
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Melakukan registrasi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Pengiriman poster maksimal H-3 dari waktu publikasi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Pihak pengaju Wajib mencantumkan logo BEM-KM UDINUS sebagai tanda kerja sama.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Jika poin ke-4 tidak dapat terpenuhi, maka pengaju dapat menyebutkan BEM-KM UDINUS sebagai media partner saat berjalannya acara.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => "Bagi pihak internal dan eksternal Wajib mengikuti Instagram @bemkmudinus dan tiktok @bemkmudinus, Sebanyak dalam paket yang sudah disediakan yaitu:\n- Story 1×24 jam (15 follow + like 2 postingan terbaru)\n- Story 2×24 jam (25 follow + like 2 postingan terbaru)",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Username pengikut dilist dan dikirimkan pada saat konfirmasi.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Setelah melakukan registrasi, pihak terkait wajib melakukan konfirmasi dan mengirimkan bukti telah memenuhi persyaratan 4 atau 5 melalui kontak Contact Person BEM KM UDINUS (+62 882-2505-0288) Nata.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Gratis',
                    'prosedur' => 'Kementerian Luar Negeri BEM-KM UDINUS akan mengonfirmasi pengajuan kerja sama yang telah dikirimkan selambat-lambatnya 3 (tiga) hari.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                // Medpart Berbayar
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Melakukan registrasi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Pengiriman poster maksimal H-3 dari waktu publikasi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Pihak pengaju Wajib mencantumkan logo BEM-KM UDINUS sebagai tanda kerja sama.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Jika poin ke-4 tidak dapat terpenuhi, maka pengaju dapat menyebutkan BEM-KM UDINUS sebagai media partner saat berjalannya acara.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => "Bagi pihak internal dan eksternal Wajib membayar sebesar yang ditentukan sesuai paket yang dipilih.\n- 1 x posting 24 jam Rp30.000,00\n- 2 x posting 24 jam Rp50.000,00",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Pembayaran melalui Dana 082314322864 (Faqih Rizqian Mahardika).',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Setelah melakukan registrasi, pihak terkait wajib melakukan konfirmasi dan mengirimkan bukti telah memenuhi persyaratan 4, 5 dan 6 melalui kontak Contact Person BEM KM UDINUS (+62 882-2505-0288) Nata.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'partnership_id' => $mediaPartner->id,
                    'kategori' => 'Medpart Berbayar',
                    'prosedur' => 'Kementerian Luar Negeri BEM-KM UDINUS akan mengonfirmasi pengajuan kerja sama yang telah dikirimkan selambat-lambatnya 3 (tiga) hari.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
