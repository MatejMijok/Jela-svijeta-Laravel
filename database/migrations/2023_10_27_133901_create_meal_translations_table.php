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
        Schema::create('meal_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_meal');
            $table->unsignedBigInteger('id_language');
            $table->string('nameTranslation', 100);
            $table->string('descriptionTranslation', 100);
            $table->timestamps();

            $table->foreign('id_meal')->references('id')->on('meal');
            $table->foreign('id_language')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_translations');
    }
};
