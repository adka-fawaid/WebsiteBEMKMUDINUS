<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPartnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    // Define relationship to Partnership
    public function partnership()
    {
        return $this->hasMany(Partnership::class);
    }
}
