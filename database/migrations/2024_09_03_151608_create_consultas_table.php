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
    Schema::create('consultas', function (Blueprint $table) {
        $table->id();
        $table->string('codigo', 255);
        $table->text('articulo');
        $table->text('lote')->nullable();
        $table->date('fvencimiento')->nullable();
        $table->decimal('precioventa', 18, 2)->nullable();
        $table->integer('saldo')->nullable();
        $table->unsignedBigInteger('id_articulo');
        $table->timestamps();

        $table->foreign('id_articulo')->references('id')->on('articulos')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
