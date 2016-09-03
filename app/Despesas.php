<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    protected $fillable = ['titulo', 'descricao', 'valor', 'mesRef'];
}
