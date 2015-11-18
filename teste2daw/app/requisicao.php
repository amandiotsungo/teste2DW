<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requisicao extends Model
{
    //

     protected $table = 'requisicao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['data_devolucao', 'estado_conservacao', 'observacao', 'id_livros', 'id_utentes'];
}
