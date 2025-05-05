<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('word_users', function (Blueprint $table) {
            Schema::table('word_users', function (Blueprint $table) {
                $table->boolean('answered')->default(false);
                $table->timestamp('answered_at')->nullable();
                $table->string('user_answer')->nullable();
                $table->boolean('is_correct')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('word_users', function (Blueprint $table) {
            //
        });
    }
};
