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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_hora_inicio_visita');
            $table->datetime('fecha_hora_fin_visita');
            $table->foreignId('prisionero_id')->constrained()->onDelete('cascade');
            $table->foreignId('visitante_id')->constrained()->onDelete('cascade');
            $table->foreignId('guardia_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
