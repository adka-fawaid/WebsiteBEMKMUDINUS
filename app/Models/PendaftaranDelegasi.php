<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranDelegasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_lengkap',
        'nama_instansi',
        'nomor_telepon',
        'nama_acara',
        'deskripsi_acara',
        'surat_undangan',
    ];
}
