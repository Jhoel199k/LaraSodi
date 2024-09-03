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
    Schema::create('salidas', function (Blueprint $table) {
        $table->id();
        $table->text('estado');
        $table->timestamp('fechayhora');
        $table->text('tipo');
        $table->integer('nro');
        $table->decimal('total_costo', 18, 2);
        $table->text('destino')->nullable();
        $table->unsignedBigInteger('registrador_id');
        $table->integer('linea')->nullable();
        $table->timestamps();

        $table->foreign('registrador_id')->references('id')->on('usuarios')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salidas');
    }
};
