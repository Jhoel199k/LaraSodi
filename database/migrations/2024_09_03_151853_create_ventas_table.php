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
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('idsistema');
        $table->string('estado', 50);
        $table->dateTime('fechahora');
        $table->string('tipo', 50);
        $table->string('nRO', 50);
        $table->decimal('totalventas', 18, 2);
        $table->string('cliente', 255);
        $table->string('autorizacion', 255);
        $table->text('f')->nullable();
        $table->string('codigo_control', 255);
        $table->string('nit_cliente', 50);
        $table->text('e')->nullable();
        $table->string('registrador', 255);
        $table->unsignedBigInteger('idpedido')->nullable();
        $table->text('linea')->nullable();
        $table->unsignedBigInteger('cliente_id')->nullable();
        $table->unsignedBigInteger('registrador_id')->nullable();
        $table->unsignedBigInteger('pedido_id')->nullable();
        $table->timestamps();

        $table->foreign('idpedido')->references('id')->on('rutas')->onDelete('set null');
        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
        $table->foreign('registrador_id')->references('id')->on('usuarios')->onDelete('set null');
        $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
