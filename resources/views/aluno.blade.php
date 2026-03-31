@foreach ($alunos as $aluno)

<p>Nome: {{$aluno->nome}} </p>
<p>Telefone: {{$aluno->telefone}} </p>
<p>E-mail: {{$aluno->email}} </p>
<hr>

@endforeach