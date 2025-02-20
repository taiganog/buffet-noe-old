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
        Schema::create('responsaveis', function (Blueprint $table) {
            $table->id();
            $table->string('endereco', length: 150);
            $table->string('nome', length: 100);
            $table->string('telefone', length: 15);
            $table->string('telefone_2', length: 15);
            $table->string('cpf', length: 18);
            $table->string('rg', length: 18);

            // FK
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->unique('id_evento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('responsaveis', function(Blueprint $table) {
            $table->dropForeign('responsaveis_id_evento_foreign');
            $table->dropColumn('id_evento');
        });

        Schema::dropIfExists('responsaveis');
    }
};
