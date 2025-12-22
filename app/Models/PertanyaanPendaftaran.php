<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pendaftaran_id',
        'pertanyaan',
        'tipe_jawaban',
    ];

    // Define relationship to Pendaftaran
    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    // Define relationship to OpsiJawaban
    public function opsiJawaban()
    {
        return $this->hasMany(OpsiJawaban::class);
    }
}
