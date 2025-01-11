<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    public function receptek()
    {
        return $this->hasMany(Recept::class, 'kat_id', 'id');  // 'kat_id' a recept táblában, 'id' a kategoria táblában
    }

}
