<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranPartnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnership_id',
        'pertanyaan',
        'tipe_jawaban',
    ];

    // Define relationship to Partnership
    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }

    // Define relationship to OpsiJawabanPendaftaran
    public function opsiJawabanPendaftaran()
    {
        return $this->hasMany(OpsiJawabanPendaftaran::class);
    }
}
