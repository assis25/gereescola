<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Descrição da turma: {{ $turma->desc_turma }} - Nome do instrutor: {{ $instrutor->nome }}</h3>
	@foreach($alunos as $aluno)
		{{$aluno->nome}} <br/>
	@endforeach
	<b>Total: </b>{{$qtde}}
</body>
</html>