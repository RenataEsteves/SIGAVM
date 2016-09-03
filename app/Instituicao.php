<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [ 'nome', 'fone', 'email', 'rua', 'numero', 'bairro', 'cidade' ];
}
