<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabinet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'periode',
        'logo',
        'deskripsi',
    ];

    // Define relationship to Visi
    public function visi()
    {
        return $this->hasMany(Visi::class);
    }

    // Define relationship to Misi
    public function misi()
    {
        return $this->hasMany(Misi::class);
    }

    // Define relationship to MaknaSimbol
    public function maknaSimbol()
    {
        return $this->hasMany(MaknaSimbol::class);
    }

    // Define relationship to MaknaWarna
    public function maknaWarna()
    {
        return $this->hasMany(MaknaWarna::class);
    }
}
