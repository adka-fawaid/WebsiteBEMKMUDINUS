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
        'link',
    ];

    // Define relationship to Pendaftaran
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
