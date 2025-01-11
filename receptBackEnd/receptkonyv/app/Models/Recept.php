<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptFactory> */
    use HasFactory;

    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kat_id', 'id'); // 'kat_id' a recept táblában, 'id' a kategoria táblában
    }


}
