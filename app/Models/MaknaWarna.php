<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaknaWarna extends Model
{
    use HasFactory;

    protected $fillable = [
        'kabinet_id',
        'warna',
        'makna',
    ];

    // Relationship with Kabinet
    public function kabinet()
    {
        return $this->belongsTo(Kabinet::class);
    }
}
