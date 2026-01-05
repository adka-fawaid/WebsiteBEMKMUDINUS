<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaKajian extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_organisasi_id',
        'judul',
        'isi',
    ];

    // Define relationship to UnitOrganisasi
    public function unitOrganisasi()
    {
        return $this->belongsTo(UnitOrganisasi::class);
    }

    // Define relationship to ReferensiKajian
    public function referensiKajian()
    {
        return $this->hasMany(ReferensiKajian::class);
    }
}
