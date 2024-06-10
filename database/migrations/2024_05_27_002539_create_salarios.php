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
        Schema::create('salarios', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('salario_garcom');
            $table->unsignedSmallInteger('salario_cozinheiro');
            $table->unsignedSmallInteger('salario_ajudante_cozinha');
            $table->unsignedSmallInteger('salario_porteiro');
            $table->unsignedSmallInteger('salario_maitre');
            $table->unsignedSmallInteger('salario_salgado');
            $table->unsignedSmallInteger('salario_montagem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salario_eventos');
    }
};
