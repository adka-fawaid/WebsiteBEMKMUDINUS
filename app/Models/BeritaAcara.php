<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_kerja_id',
        'judul',
        'tanggal_dibuat',
        'tema',
        'tanggal_mulai',
        'tanggal_selesai',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
        'ringkasan',
        'foto',
    ];

    // Define relationship to ProgramKerja
    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class);
    }

    // Define relationship to JadwalKegiatan
    public function jadwalKegiatan()
    {
        return $this->hasMany(JadwalKegiatan::class);
    }

    // Define relationship to DokumentasiKegiatan
    public function dokumentasiKegiatan()
    {
        return $this->hasMany(DokumentasiKegiatan::class);
    }

    // Define relationship to DaftarHadir
    public function daftarHadir()
    {
        return $this->hasMany(DaftarHadir::class);
    }

    // Define relationship to PenanggungJawab
    public function penanggungJawab()
    {
        return $this->hasMany(PenanggungJawab::class);
    }
}
