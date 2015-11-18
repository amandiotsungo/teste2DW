<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devolucao extends Model
{
    //
       protected $table = 'devolucao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_livro', 'id_utente', 'estado_conservacao'];

}
