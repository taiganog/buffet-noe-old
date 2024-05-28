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
        Schema::create('equipe_eventos', function(Blueprint $table){
            $table->id();

            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');

            $table->enum('funcao', ['GARCOM',
                                    'COZINHEIRO',
                                    'AJUDANTE_COZINHA',
                                    'PORTEIRO',
                                    'MAITRE',
                                    'MONTAGEM',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipe_eventos', function(Blueprint $table){
            $table->dropForeign('equipe_eventos_id_evento_foreign');
            $table->dropForeign('equipe_eventos_id_funcionario_foreign');

            $table->dropColumn('id_evento');
            $table->dropColumn('id_funcionario');

            $table->dropColumn('funcao');
        });

        Schema::dropIfExists('equipe_eventos');
    }
};
