<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolucaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolucaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_livro')->unsigned();
            $table->foreign ('id_livro')->references('id')->on('livros');
            $table->integer('id_utente')->unsigned();
            $table->foreign('id_utente')->references('id')->on('utentes');
            $table->string('estado_conservacao');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devolucaos');
    }
}
