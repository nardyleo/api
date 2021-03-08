<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FormularioBOS extends Model
{
  protected $table = 'bosimplificado';
  protected $fillable = [
    'users_id', 'vitima_id', 'atendimento_id', 'ocorrencia_id', 'tipo_ocorrencia','tipo_outro', 'resumo',
    'dadoscomp','created_at','updated_at','status','tipo','corporacao_id', 'sequencial',
];
}

