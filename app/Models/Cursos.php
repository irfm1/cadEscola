<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'diciplinas'
    ];


    public function turmas()
    {
        return $this->hasMany('Turmas');
    }

    public function disciplinas()
    {
        return $this->hasMany('Disciplinas');
    }
}
