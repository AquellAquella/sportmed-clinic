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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->string('sexo');
            $table->longText('enfPersPat');
            $table->longText('medicamentos');
            $table->longText('enfPersNoPat');
            $table->string('estatusPadre');
            $table->longText('enfPadre')->nullable();
            $table->string('estatusMadre');
            $table->longText('enfMadre')->nullable();
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
