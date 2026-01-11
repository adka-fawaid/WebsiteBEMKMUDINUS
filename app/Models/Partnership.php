<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'deskripsi',
        'link_pendaftaran',
        'use_link',
    ];

    // Relasi dengan ProsedurPartnership
    public function prosedurPartnerships()
    {
        return $this->hasMany(ProsedurPartnership::class);
    }
}
