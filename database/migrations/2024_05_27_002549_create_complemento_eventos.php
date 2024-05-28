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
        Schema::create('complemento_eventos', function(Blueprint $table) {
            $table->id();

            $table->boolean('cascata');
            $table->boolean('salgado');
            $table->boolean('bar');
            $table->boolean('algodao_doce');
            $table->boolean('porteiro');
            $table->boolean('maitre');
            $table->boolean('montagem');

            $table->unsignedSmallInteger('taca');
            $table->unsignedSmallInteger('cumbuca');
            $table->unsignedSmallInteger('prataria');
            $table->unsignedSmallInteger('louça_sobremesa');
            $table->unsignedSmallInteger('cestinha');
            $table->unsignedSmallInteger('garcom');
            $table->unsignedSmallInteger('cozinheiro');
            $table->unsignedSmallInteger('ajudante_cozinha');

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
        Schema::table('complemento_eventos', function(Blueprint $table) {
            $table->dropForeign('complemento_eventos_id_evento_foreign');
            $table->dropColumn('id_evento');
        });

        Schema::dropIfExists('complemento_eventos');
    }
};
