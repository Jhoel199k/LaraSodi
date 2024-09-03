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
    Schema::create('articulos', function (Blueprint $table) {
        $table->id();
        $table->text('clasificador')->nullable();
        $table->text('codigo_interno')->nullable();
        $table->text('linea')->nullable();
        $table->text('descripcion')->nullable();
        $table->decimal('precio1', 18, 2)->nullable();
        $table->decimal('precio2', 18, 2)->nullable();
        $table->decimal('precio3', 18, 2)->nullable();
        $table->decimal('precio4', 18, 2)->nullable();
        $table->text('codigo_producto_sin')->nullable();
        $table->text('codigo_unidad')->nullable();
        $table->text('nombre_unidad')->nullable();
        $table->unsignedBigInteger('proveedor_id')->nullable();
        $table->decimal('descuento_farmacia', 5, 2)->nullable();
        $table->decimal('descuento_6_meses', 5, 2)->nullable();
        $table->decimal('descuento_3_meses', 5, 2)->nullable();
        $table->timestamps();

        $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
