<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSponsorship extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_lengkap',
        'nama_instansi',
        'nomor_telepon',
        'proposal_acara',
    ];
}
