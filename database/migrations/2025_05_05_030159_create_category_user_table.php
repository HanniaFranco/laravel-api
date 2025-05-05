<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('category_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //Creamos una columa user_id y la convertimos en clave foránea que apunta a id en la tabla users
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); //(onDelete) Si se elimina un usuario o categoría, se eliminan automáticamente sus relaciones.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_user');
    }
};
