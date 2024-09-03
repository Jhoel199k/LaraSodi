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
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('codigo', 255);
        $table->text('cliente');
        $table->text('nit_ci')->nullable();
        $table->text('razon_social')->nullable();
        $table->text('descripcion')->nullable();
        $table->text('ciudad')->nullable();
        $table->text('zona')->nullable();
        $table->integer('dias')->nullable();
        $table->unsignedBigInteger('id_vendedor')->nullable();
        $table->text('vendedor')->nullable();
        $table->text('correo_sin')->nullable();
        $table->timestamps();

        $table->foreign('id_vendedor')->references('id')->on('usuarios')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
