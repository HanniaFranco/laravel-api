<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Word;
use App\Models\WordUser;
use App\Models\User;
use Carbon\Carbon; // Para formatear las fechas
use Illuminate\Support\Facades\Auth; 

class DailyWordController extends Controller
{
    // Método para obtener las palabras del día por categoría
    public function getDailyWords()
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Obtener la fecha de hoy
        $today = Carbon::today();

        // Array para almacenar las palabras
        $words = [];

        // Recorrer las categorías que el usuario ha seleccionado
        foreach ($user->categories as $category) {
            // Verificar si ya se le mostró una palabra en esta categoría hoy
            $alreadyShown = WordUser::where('user_id', $user->id)
                ->where('category_id', $category->id)
                ->whereDate('shown_at', $today)
                ->first();

            if ($alreadyShown) {
                // Si ya se mostró una palabra hoy, añadir la que ya fue mostrada
                $words[] = $alreadyShown->word;
            } else {
                // Si no se mostró una palabra hoy, seleccionar una palabra aleatoria de la categoría
                $word = Word::where('category_id', $category->id)->inRandomOrder()->first();

                if ($word) {
                    // Registrar que esta palabra fue mostrada al usuario hoy
                    WordUser::create([
                        'user_id' => $user->id,
                        'category_id' => $category->id,
                        'word_id' => $word->id,
                        'shown_at' => $today,
                    ]);

                    // Añadir la palabra a la lista de palabras del día
                    $words[] = $word;
                }
            }
        }

        // Aquí devolvemos las palabras seleccionadas como respuesta en formato JSON
        return response()->json($words);
    }

    // Método para validar la respuesta del usuario
    public function validateAnswer(Request $request, $wordId)
    {
        $user = Auth::user();
        $word = Word::findOrFail($wordId);
        $correctAnswer = $word->correct_answer;

        // Buscar si esa palabra ya fue mostrada al usuario hoy
        $record = WordUser::where('user_id', $user->id)
            ->where('word_id', $wordId)
            ->whereDate('shown_at', today())
            ->first();

        // Si no se mostró o ya fue respondida, bloquear
        if (!$record) {
            return response()->json(['message' => 'Esta palabra no fue asignada hoy.'], 403);
        }

        if ($record->answered) {
            return response()->json(['message' => 'Ya has respondido esta palabra hoy.'], 403);
        }

        // Evaluar la respuesta
        $isCorrect = $request->answer === $correctAnswer;
        $message = $isCorrect ? '¡Has contestado correctamente!' : 'Esa respuesta es incorrecta.';

        // Actualizar score
        $user->score += $isCorrect ? 1 : -1;
        $user->save();

        // Marcar como respondida
        $record->answered = true;
        $record->answered_at = now();
        $record->user_answer = $request->answer;
        $record->is_correct = $isCorrect;
        $record->save();

        return response()->json([
            'message' => $message,
            'score' => $user->score,
            'correct' => $isCorrect,
        ]);
    }

}

