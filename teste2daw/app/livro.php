<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    //

     protected $table = 'livro';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'resumo', 'autor', 'edicao', 'editora', 'volume', 'categoria', 'estado_conservacao'];
}
