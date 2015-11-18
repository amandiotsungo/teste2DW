<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('data_devolucao');
            $table->string('estado_conservacao');
            $table->string('observacao');
            $table->integer('id_livros')->unsigned();
            $table->foreign ('id_livros')->references('id')->on('livros');
            $table->integer('id_utentes')->unsigned();
            $table->foreign('id_utentes')->references('id')->on('utentes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requisicaos');
    }
}
