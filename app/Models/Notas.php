<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $fillable = [
        'nota',
    ];


    public function turmas()
    {
        return $this->hasMany('App\Models\turmas');
    }
}
