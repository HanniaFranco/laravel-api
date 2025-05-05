<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Category;
use App\Models\Word;

class WordUser extends Model
{
    //El word user es para llevar un registro de las palabras que se muestran a cada usuario.
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'word_id',
        'shown_at',
        'answered',
        'answered_at',
        'user_answer',
        'is_correct',
    ];
    
    //Para guardar correctamente esos valores cuando el usuario responda.
    protected $casts = [
        'answered' => 'boolean',
        'answered_at' => 'datetime',
        'is_correct' => 'boolean',
    ];
    

    /**
     * Relación con el usuario
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con la categoría
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relación con la palabra
     */
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
