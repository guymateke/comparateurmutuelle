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
        Schema::create('comparaisons', function (Blueprint $table) {
            $table->id();
            $table->int('utilisateur_id');
            $table->date('date');
            $table->dict('criteres');
            $table->listOffreMutuelle('resultats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comparaisons');
    }
};
