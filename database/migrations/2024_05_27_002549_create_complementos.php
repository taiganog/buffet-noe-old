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
        Schema::create('complementos', function(Blueprint $table) {
            $table->id();

            $table->boolean('cascata');
            $table->boolean('salgado');
            $table->boolean('buffet');
            $table->boolean('maitre');

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

            $table->text('menu');

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
        Schema::table('complementos', function(Blueprint $table) {
            $table->dropForeign('complementos_id_evento_foreign');
            $table->dropColumn('id_evento');
        });

        Schema::dropIfExists('complementos');
    }
};
