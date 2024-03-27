<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esercizio extends Model
{
    use HasFactory;

    public function allenamenti(): BelongsToMany
    {
        return $this->belongsToMany(Allenamento::class);
    }
}
