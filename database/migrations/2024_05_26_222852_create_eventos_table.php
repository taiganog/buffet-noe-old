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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('local', length: 150);
            $table->date('data');
            $table->enum('tipo', ['FESTA_INFANTIL',
                                    '15_ANOS',
                                    'FESTA_ADULTO',
                                    'CASAMENTO',
                                    'FORMATURA',
                                    'CONFRATERNIZACAO',
                                    'CHURRASCO']);
            $table->unsignedSmallInteger('numero_convidados');
            $table->unsignedSmallInteger('valor');
            $table->text('observacao');
            $table->timestamps();

            $table->unsignedBigInteger('id_responsavel');
            $table->foreign('id_responsavel')->references('id')->on('responsaveis');
            $table->unique('id_responsavel');

            $table->unsignedBigInteger('id_complemento');
            $table->foreign('id_complemento')->references('id')->on('complementos');
            $table->unique('id_complemento');

            $table->unsignedBigInteger('id_salario');
            $table->foreign('id_salario')->references('id')->on('salarios');
            $table->unique('id_salario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // TODO: implementar drop de chave foreign
        Schema::dropIfExists('eventos');
    }
};
