<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Series extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'genero',
        'classificacao_indicativa',
        'temporadas',
        'ano_lancamento',
        'status',
        'capa',
    ];
}
