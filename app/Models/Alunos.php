<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'bairro',
        'estado',
        'cidade',
        'telefone',
        'telefone2',
        'nomePai',
        'nomeMae',
        'email',
        'pagamento',
        'tipo'
    ];

    public function cursos()
    {
        return $this->hasMany('App\Models\cursos');
    }

    public function turmas()
    {
        return $this->hasMany('App\Models\turmas');
    }
}
