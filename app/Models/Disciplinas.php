<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    protected $fillable = [
        'nome',
        'professor',
        'descricao',
        'diciplinas'
    ];


}
