<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = [ 'nome', 'rg', 'cpf', 'orgaoEmissor', 'fone', 'foneEmerg',
        'email', 'anoCadastro', 'ativo', 'rua', 'numero', 'bairro', 'cidade', 'id_Inst' ];
}
