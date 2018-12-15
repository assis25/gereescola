<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
	public function alunos(){
		return $this->belongsTo('App\Aluno');
	}
	public function turmas(){
		return $this->belongsTo('App\Turma');
	}	

}
