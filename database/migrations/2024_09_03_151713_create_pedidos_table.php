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
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id();
        $table->text('estado');
        $table->timestamp('fechayhora');
        $table->integer('nro');
        $table->decimal('total_ventas', 18, 2);
        $table->decimal('pagado', 18, 2)->nullable();
        $table->decimal('saldo', 18, 2)->nullable();
        $table->unsignedBigInteger('cliente_id');
        $table->text('operacion')->nullable();
        $table->text('f')->nullable();
        $table->text('e')->nullable();
        $table->unsignedBigInteger('registrador_id');
        $table->integer('linea')->nullable();
        $table->timestamps();

        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        $table->foreign('registrador_id')->references('id')->on('usuarios')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
