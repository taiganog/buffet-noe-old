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
            $table->string('nome', length: 100);
            $table->string('nome_responsavel', length: 100);
            $table->string('telefone_responsavel', length: 15);
            $table->date('data');
            $table->enum('tipo', ['FESTA_INFANTIL',
                                    '15_ANOS',
                                    'FESTA_ADULTO',
                                    'CASAMENTO',
                                    'FORMATURA',
                                    'CONFRATERNIZACAO',
            ]);
            $table->unsignedSmallInteger('numero_convidados');
            $table->unsignedSmallInteger('valor');
            $table->text('observacao');

            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
