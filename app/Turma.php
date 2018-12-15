<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
	public function matriculas(){
		return $this->hasMany('App\Matricula');
	}
	public function instrutors(){
		return $this->belongsTo('App\Instrutor');
	}
	public function cursos(){
		return $this->belongsTo('App\Curso');
	}
}
