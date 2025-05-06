<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DailyWordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/categories', [CategoryController::class, 'list']);


// Rutas protegidas por Sanctum
Route::middleware('auth:sanctum')->group(function () {
    //Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // Obtener palabras diarias (una por cada categoría seleccionada)
    Route::get('/daily-words', [DailyWordController::class, 'getDailyWords']);

    // Enviar respuesta del usuario a una palabra
    Route::post('/answer/{wordId}', [DailyWordController::class, 'validateAnswer']);

    // Seleccionar categorías iniciales (solo una vez)
    Route::post('/select-categories', [CategoryController::class, 'selectCategories']);

    // Obtener el perfil del usuario (opcional)
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});


/*Probar sin middleware
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/categories', [CategoryController::class, 'list']);
Route::post('/categories/select', [CategoryController::class, 'selectCategories']);
Route::get('/daily-words', [DailyWordController::class, 'getDailyWords']);
Route::post('/validate-answer/{wordId}', [DailyWordController::class, 'validateAnswer']);
Route::get('/user', function (Request $request) {
    return $request->user();
});
*/
