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
        Schema::create('valores', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('cascata');
            $table->unsignedSmallInteger('salgado');
            $table->unsignedSmallInteger('buffet');
            $table->unsignedSmallInteger('maitre');

            $table->unsignedSmallInteger('porteiro');
            $table->unsignedSmallInteger('montagem');
            $table->unsignedSmallInteger('taca');
            $table->unsignedSmallInteger('cumbuca');
            $table->unsignedSmallInteger('prataria');
            $table->unsignedSmallInteger('louça_sobremesa');
            $table->unsignedSmallInteger('cestinha');
            $table->unsignedSmallInteger('garcom');
            $table->unsignedSmallInteger('cozinheiro');
            $table->unsignedSmallInteger('bar');
            $table->unsignedSmallInteger('ajudante_cozinha');

            // FK
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
        Schema::table('valores', function(Blueprint $table) {
            $table->dropForeign('valores_id_evento_foreign');
            $table->dropColumn('id_evento');
        });

        Schema::dropIfExists('valores');
    }
};
