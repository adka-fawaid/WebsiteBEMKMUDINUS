<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiKajian extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_kajian_id',
        'judul',
        'link',
    ];

    // Define relationship to BeritaKajian
    public function beritaKajian()
    {
        return $this->belongsTo(BeritaKajian::class);
    }
}
