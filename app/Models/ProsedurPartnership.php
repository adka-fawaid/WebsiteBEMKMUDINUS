<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsedurPartnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnership_id',
        'prosedur',
    ];

    // Define relationship to Partnership
    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
}
