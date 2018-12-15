<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function matriculas()
    {
        return $this->hasMany('App\Matricula');
    }
}
