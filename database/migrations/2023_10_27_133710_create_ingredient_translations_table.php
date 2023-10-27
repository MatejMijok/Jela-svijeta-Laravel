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
        Schema::create('ingredient_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ingredient');
            $table->unsignedBigInteger('id_language');
            $table->string('nameTranslation', 100);
            $table->timestamps();

            $table->foreign('id_ingredient')->references('id')->on('ingredient');
            $table->foreign('id_language')->references('id')->on('language');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_translations');
    }
};
