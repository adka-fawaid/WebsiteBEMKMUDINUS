<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_partnership_id',
        'nama',
        'deskripsi',
    ];

    // Define relationship to KategoriPartnership
    public function kategoriPartnership()
    {
        return $this->belongsTo(KategoriPartnership::class);
    }

    // Define relationship to PendaftaranPartnership
    public function pendaftaranPartnership()
    {
        return $this->hasMany(PendaftaranPartnership::class);
    }

    // Define relationship to ProsedurPartnership
    public function prosedurPartnership()
    {
        return $this->hasMany(ProsedurPartnership::class);
    }

    // Define relationship to RespondPendaftaranPartnership
    public function respondPendaftaranPartnership()
    {
        return $this->hasMany(RespondPendaftaranPartnership::class);
    }
}
