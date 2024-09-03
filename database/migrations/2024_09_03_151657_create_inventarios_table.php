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
    Schema::create('inventarios', function (Blueprint $table) {
        $table->id();
        $table->text('clasificador')->nullable();
        $table->string('codigo', 255);
        $table->text('articulo');
        $table->text('nrolote')->nullable();
        $table->date('fechavencimiento')->nullable();
        $table->unsignedBigInteger('entrada')->nullable();
        $table->unsignedBigInteger('salida')->nullable();
        $table->integer('saldo')->nullable();
        $table->decimal('entradabs', 18, 2)->nullable();
        $table->decimal('salidabs', 18, 2)->nullable();
        $table->decimal('saldobs', 18, 2)->nullable();
        $table->unsignedBigInteger('id_articulo');
        $table->boolean('visible')->nullable();
        $table->timestamps();

        $table->foreign('entrada')->references('id')->on('entradas')->onDelete('set null');
        $table->foreign('salida')->references('id')->on('salidas')->onDelete('set null');
        $table->foreign('id_articulo')->references('id')->on('articulos')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
