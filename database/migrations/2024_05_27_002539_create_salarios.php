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

            $table->unsignedSmallInteger('salario_garcom')->nullable();
            $table->unsignedSmallInteger('salario_cozinheiro')->nullable();
            $table->unsignedSmallInteger('salario_ajudante_cozinha')->nullable();
            $table->unsignedSmallInteger('salario_porteiro')->nullable();
            $table->unsignedSmallInteger('salario_maitre')->nullable();
            $table->unsignedSmallInteger('salario_salgado')->nullable();
            $table->unsignedSmallInteger('salario_montagem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salarios');
    }
};
