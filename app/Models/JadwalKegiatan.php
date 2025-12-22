<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_acara_id',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'kegiatan',
    ];

    // Define relationship to BeritaAcara
    public function beritaAcara()
    {
        return $this->belongsTo(BeritaAcara::class);
    }
}
