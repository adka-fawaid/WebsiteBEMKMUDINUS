<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_kerja_id',
        'judul',
        'deskripsi',
        'tanggal_buka',
        'tanggal_tutup',
    ];

    // Define relationship to ProgramKerja
    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class);
    }

    // Define relationship to PertanyaanPendaftaran
    public function pertanyaanPendaftarans()
    {
        return $this->hasMany(PertanyaanPendaftaran::class);
    }

    // Define relationship to RespondPendaftaran
    public function respondPendaftaran()
    {
        return $this->hasMany(RespondPendaftaran::class);
    }
}