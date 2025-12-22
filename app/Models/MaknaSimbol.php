<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaknaSimbol extends Model
{
    use HasFactory;

    protected $fillable = [
        'kabinet_id',
        'simbol',
        'makna',
    ];

    // Define relationship to Kabinet
    public function kabinet()
    {
        return $this->belongsTo(Kabinet::class);
    }
}
