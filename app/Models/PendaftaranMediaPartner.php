<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranMediaPartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_lengkap',
        'nama_instansi',
        'nomor_telepon',
        'nama_acara',
        'deskripsi_acara',
        'proposal_acara',
        'poster_acara',
        'jenis_paket',
        'bukti_follow',
        'akun_tag',
    ];
}
