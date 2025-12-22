<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_acara_id',
        'nama',
        'nim',
        'tanda_tangan',
    ];

    // Define relationship to BeritaAcara
    public function beritaAcara()
    {
        return $this->belongsTo(BeritaAcara::class);
    }
}
