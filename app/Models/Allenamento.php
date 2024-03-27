<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allenamento extends Model
{
    use HasFactory;

    public function atleta(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function esercizi(): BelongsToMany
    {
        return $this->belongsToMany(Esercizio::class);
    }
}
