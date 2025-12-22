<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitOrganisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'logo',
    ];

    // Define relationship to AnggotaUnit
    public function anggotaUnit()
    {
        return $this->hasMany(AnggotaUnit::class);
    }

    // Define relationship to BeritaKajian
    public function beritaKajian()
    {
        return $this->hasMany(BeritaKajian::class);
    }
}
