<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PendaftaranDelegasi;
use App\Models\PendaftaranKampusVisit;
use App\Models\PendaftaranKolaborasi;
use App\Models\PendaftaranMediaPartner;
use App\Models\PendaftaranSponsorship;

class PendaftaranPartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder Pendaftaran Delegasi
        PendaftaranDelegasi::create([
            'nomor_pendaftaran' => 'DLG-2026-001',
            'email' => 'delegasi@himti-univ.ac.id',
            'nama_lengkap' => 'Ahmad Rizki Pratama',
            'nama_instansi' => 'HIMTI Universitas Gadjah Mada',
            'nomor_telepon' => '081234567890',
            'nama_acara' => 'Tech Conference 2026',
            'deskripsi_acara' => 'Konferensi teknologi tingkat nasional yang membahas perkembangan AI dan Machine Learning di Indonesia. Acara ini akan menghadirkan pembicara dari berbagai universitas ternama.',
            'surat_undangan' => 'pendaftaran-delegasi/surat-undangan/surat-undangan-tech-conference-2026.pdf',
        ]);

        // Seeder Pendaftaran Kampus Visit
        PendaftaranKampusVisit::create([
            'nomor_pendaftaran' => 'KV-2026-001',
            'email' => 'osis@smansa-jakarta.sch.id',
            'nama_lengkap' => 'Siti Nurhaliza',
            'nama_instansi' => 'SMAN 1 Jakarta',
            'nomor_telepon' => '082345678901',
            'proposal_acara' => 'pendaftaran-kampus-visit/proposal/proposal-kunjungan-smansa-jakarta.pdf',
        ]);

        // Seeder Pendaftaran Kolaborasi
        PendaftaranKolaborasi::create([
            'nomor_pendaftaran' => 'KLB-2026-001',
            'email' => 'kolaborasi@bem-its.ac.id',
            'nama_lengkap' => 'Budi Santoso',
            'nama_instansi' => 'BEM KM Institut Teknologi Sepuluh Nopember',
            'nomor_telepon' => '083456789012',
            'nama_acara' => 'National Student Summit 2026',
            'deskripsi_acara' => 'Summit mahasiswa tingkat nasional yang bertujuan untuk membangun networking antar BEM se-Indonesia. Acara ini akan diisi dengan berbagai diskusi panel, workshop, dan kegiatan team building.',
            'proposal_acara' => 'pendaftaran-kolaborasi/proposal/proposal-national-student-summit-2026.pdf',
        ]);

        // Seeder Pendaftaran Media Partner
        PendaftaranMediaPartner::create([
            'nomor_pendaftaran' => 'MP-2026-001',
            'email' => 'info@kampusmedia.id',
            'nama_lengkap' => 'Dinda Permata Sari',
            'nama_instansi' => 'Kampus Media Indonesia',
            'nomor_telepon' => '084567890123',
            'nama_acara' => 'UDINUS Tech Festival 2026',
            'deskripsi_acara' => 'Festival teknologi tahunan yang diselenggarakan oleh BEM KM UDINUS, menghadirkan berbagai kompetisi, seminar, dan exhibition dari industri teknologi terkemuka.',
            'proposal_acara' => 'pendaftaran-media-partner/proposal/proposal-medpart-tech-festival-2026.pdf',
            'poster_acara' => 'pendaftaran-media-partner/poster/poster-tech-festival-2026.jpg',
            'jenis_paket' => 'Paket 1',
            'bukti_follow' => 'pendaftaran-media-partner/bukti-follow/bukti-follow-kampusmedia.jpg',
            'akun_tag' => '@kampusmedia.id',
        ]);

        // Seeder Pendaftaran Sponsorship
        PendaftaranSponsorship::create([
            'nomor_pendaftaran' => 'SPR-2026-001',
            'email' => 'sponsorship@telkomdigital.co.id',
            'nama_lengkap' => 'Eko Prasetyo',
            'nama_instansi' => 'Telkom Digital',
            'nomor_telepon' => '085678901234',
            'proposal_acara' => 'pendaftaran-sponsorship/proposal/proposal-sponsorship-telkom-digital.pdf',
        ]);
    }
}
