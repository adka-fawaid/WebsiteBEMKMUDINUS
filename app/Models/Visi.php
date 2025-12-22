<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kabinet_id',
        'visi',
    ];

    // Define relationship to Kabinet
    public function kabinet()
    {
        return $this->belongsTo(Kabinet::class);
    }
}
