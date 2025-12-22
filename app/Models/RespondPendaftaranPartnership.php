<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespondPendaftaranPartnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnership_id',
        'pertanyaan',
        'jawaban',
    ];

    // Define relationship to Partnership
    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
}
