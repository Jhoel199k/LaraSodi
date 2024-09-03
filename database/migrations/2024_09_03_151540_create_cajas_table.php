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
    Schema::create('cajas', function (Blueprint $table) {
        $table->id();
        $table->text('estado');
        $table->timestamp('fechayhora');
        $table->text('tipo');
        $table->integer('nro');
        $table->text('glosa')->nullable();
        $table->decimal('pagado', 18, 2)->nullable();
        $table->unsignedBigInteger('cliente_id')->nullable();
        $table->text('operacion')->nullable();
        $table->unsignedBigInteger('registrador_id');
        $table->integer('linea')->nullable();
        $table->timestamps();

        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
        $table->foreign('registrador_id')->references('id')->on('usuarios')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cajas');
    }
};
