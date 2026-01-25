<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AnggotaUnit;
use App\Models\UnitOrganisasi;

class AnggotaUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Presiden Mahasiswa unit
        $presidenMahasiswa = UnitOrganisasi::where('nama', 'PRESIDEN MAHASISWA')->first();

        if ($presidenMahasiswa) {
            AnggotaUnit::create([
                'unit_organisasi_id' => $presidenMahasiswa->id,
                'nama' => "LUKLU'UN AULA",
                'nim' => 'B11.2022.07879',
                'program_studi' => 'Manajemen',
                'angkatan' => '2022',
                'jabatan' => 'Presiden Mahasiswa',
                'foto' => 'uun.png',
            ]);
        }

        // Get Kementerian Kreasi unit
        $kemenKreasi = UnitOrganisasi::where('nama', 'KEMENTERIAN KREASI')->first();

        if ($kemenKreasi) {
            $anggotaKreasi = [
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'MOH. ADZKA FAWAID',
                    'nim' => 'A11.2022.14656',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2022',
                    'jabatan' => 'Menteri',
                    'foto' => 'fawaid.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'SYELLA NOVITA AMELIA',
                    'nim' => 'A11.2024.16043',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2024',
                    'jabatan' => 'Sekretaris',
                    'foto' => 'syella.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'WAHYU NUR SETYONO',
                    'nim' => 'A11.2022.14633',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2022',
                    'jabatan' => 'Ketua Bidang',
                    'foto' => 'wahyu.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => '	ADY CHANDRA',
                    'nim' => 'A11.2024.16070',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2024',
                    'jabatan' => 'Ketua Bidang',
                    'foto' => 'ady.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'RAFLY RAMADHANI',
                    'nim' => 'A11.2024.16066',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2024',
                    'jabatan' => 'Staff Ahli',
                    'foto' => 'rafly.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'FUAD ANWAR IBRAHIM SHIDIQ',
                    'nim' => 'A11.2024.16047',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2024',
                    'jabatan' => 'Staff Ahli',
                    'foto' => 'fuad.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'NAJWA HANDARIA SUPARNA',
                    'nim' => 'A11.2024.16039',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2024',
                    'jabatan' => 'Eksekutif Muda',
                    'foto' => 'najwa.JPG',
                ],
                [
                    'unit_organisasi_id' => $kemenKreasi->id,
                    'nama' => 'AKBAR PUTRA JALU LASTINO',
                    'nim' => 'A11.2024.16044',
                    'program_studi' => 'Teknik Informatika',
                    'angkatan' => '2024',
                    'jabatan' => 'Eksekutif Muda',
                    'foto' => 'jalu.JPG',
                ],
            ];

            foreach ($anggotaKreasi as $anggota) {
                AnggotaUnit::create($anggota);
            }
        }
    }
}
