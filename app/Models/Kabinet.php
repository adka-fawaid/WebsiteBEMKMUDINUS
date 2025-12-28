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

    // Relationship with MaknaSimbol
    public function maknaSimbol()
    {
        return $this->hasMany(MaknaSimbol::class);
    }

    // Relationship with MaknaWarna
    public function maknaWarna()
    {
        return $this->hasMany(MaknaWarna::class);
    }
}
