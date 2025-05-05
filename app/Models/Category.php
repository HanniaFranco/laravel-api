<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Word;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    /**
     * Los usuarios que pertenecen a la categoría
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Las palabras asociadas a esta categoría
     */
    public function words()
    {
        return $this->hasMany(Word::class);
    }
}

