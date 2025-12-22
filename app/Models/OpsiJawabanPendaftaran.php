<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiJawabanPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pendaftaran_partnership_id',
        'opsi_jawaban',
    ];

    // Define relationship to PendaftaranPartnership
    public function pendaftaranPartnership()
    {
        return $this->belongsTo(PendaftaranPartnership::class);
    }
}
