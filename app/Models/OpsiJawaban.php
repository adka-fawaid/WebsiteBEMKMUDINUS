<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiJawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan_pendaftaran_id',
        'opsi',
    ];

    // Define relationship to PertanyaanPendaftaran
    public function pertanyaanPendaftaran()
    {
        return $this->belongsTo(PertanyaanPendaftaran::class);
    }
}
