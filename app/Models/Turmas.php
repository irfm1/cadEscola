<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $fillable = [
        'numero',
        'ano',
        'curso',
        'lotacao',
        'inico',
        'fim'
    ];

    public function alunos()
    {
        return $this->hasMany('App\Models\alunos');
    }

    public function cursos()
    {
        return $this->hasOne('App\Models\cursos');
    }
}
