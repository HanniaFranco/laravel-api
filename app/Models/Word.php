<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class Word extends Model
{
    use HasFactory;
    /**
     * Especificamos los campos que pueden ser asignados masivamente
     */
     protected $fillable = [
        'category_id',
        'word',
        'correct_answer',
        'incorrect_1',
        'incorrect_2',
        'incorrect_3',
        'explanation',
    ];

    /**
     * La categoría a la que pertenece la palabra
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
