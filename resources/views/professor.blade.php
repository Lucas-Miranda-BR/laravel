@foreach ($professores as $professor)

<p>Nome: {{$professor->nome}} </p>
<p>Telefone: {{$professor->telefone}} </p>
<hr>

@endforeach