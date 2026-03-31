@foreach ($componentes as $componente)

<p>Nome: {{$componente->nome}} </p>
<p>Duração: {{$componente->horario}} </p>
<hr>

@endforeach