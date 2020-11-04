<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetosAprendizagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos_aprendizagem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('tipo');
            $table->text('objetivo');
            $table->text('descricao');
            $table->string('area_computacao');
            $table->string('autores');
            $table->string('idiomas');
            $table->string('uri');
            $table->string('palavras_chave');
            $table->string('status');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetos_aprendizagem');
    }
}
