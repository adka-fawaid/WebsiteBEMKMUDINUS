<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_organisasi_id',
        'nama',
        'nim',
        'program_studi',
        'angkatan',
        'jabatan',
        'foto',
    ];

    // Define relationship to UnitOrganisasi
    public function unitOrganisasi()
    {
        return $this->belongsTo(UnitOrganisasi::class);
    }
}
