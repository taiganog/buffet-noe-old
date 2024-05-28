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
        Schema::create('salario_eventos', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('salario_garcom');
            $table->unsignedSmallInteger('salario_cozinheiro');
            $table->unsignedSmallInteger('salario_ajudante_cozinha');
            $table->unsignedSmallInteger('salario_porteiro');
            $table->unsignedSmallInteger('salario_maitre');
            $table->unsignedSmallInteger('salario_salgado');
            $table->unsignedSmallInteger('salario_montagem');

            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->unique('id_evento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salario_eventos', function(Blueprint $table) {
            $table->dropForeign('salario_eventos_id_evento_foreign');
            $table->dropColumn('id_evento');
        });

        Schema::dropIfExists('salario_eventos');
    }
};
