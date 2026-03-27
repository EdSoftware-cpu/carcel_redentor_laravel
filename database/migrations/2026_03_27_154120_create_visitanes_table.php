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
        Schema::create('visitanes', function (Blueprint $table) {
            $table->id("visitante_id");
            $table->string('nombre_visitante');
            $table->string('numero_identificacion', 50)->unique();
            $table->string('relacion_con_prisionero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitanes');
    }
};
