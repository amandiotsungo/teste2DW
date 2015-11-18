<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utente extends Model
{
    //

     protected $table = 'utente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'apelido', 'bi', 'nuit', 'morada', 'telefone1', 'telefone2', 'email'];
}
