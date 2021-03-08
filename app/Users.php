<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'username', 'cpf','corporacao_id', 'endereco',
        'numero','bairro','uf','cidade','cep','sexo', 'data_nasc','estado_civil','escolaridade',
        'tipo','identidade','doc_habilitacao','cat_habilitacao','telefone','tiposanguineo','segurovida',
        'vigencia','profissao',
    ];
}
