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
    Schema::create('rutas', function (Blueprint $table) {
        $table->id();
        $table->string('origen', 255);
        $table->string('destino', 255);
        $table->dateTime('fecha_salida');
        $table->dateTime('fecha_llegada');
        $table->string('rastreo_gps', 255);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutas');
    }
};
