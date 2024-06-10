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
        Schema::table('eventos', function(Blueprint $table) {
            // FK's
            $table->unsignedBigInteger('id_responsavel');
            $table->foreign('id_responsavel')->references('id')->on('responsaveis');
            $table->unique('id_responsavel');

            $table->unsignedBigInteger('id_complemento');
            $table->foreign('id_complemento')->references('id')->on('complementos');
            $table->unique('id_complemento');

            $table->unsignedBigInteger('id_salario')->nullable();
            $table->foreign('id_salario')->references('id')->on('salarios');
            $table->unique('id_salario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eventos', function(Blueprint $table) {
            $table->dropForeign('eventos_id_responsavel_foreign');
            $table->dropForeign('eventos_id_complemento_foreign');
            $table->dropForeign('eventos_id_salario_foreign');

            $table->dropColumn('id_responsavel');
            $table->dropColumn('id_complemento');
            $table->dropColumn('id_salario');
        });
    }
};
