<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'foto',
        'pendaftaran',
    ];

    // Define relationship to BeritaAcara
    public function beritaAcara()
    {
        return $this->hasMany(BeritaAcara::class);
    }

    // Define relationship to Pendaftaran
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
