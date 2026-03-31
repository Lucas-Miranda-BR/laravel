@foreach ($cursos as $curso)

<p>Nome: {{$curso->nome}} </p>
<p>Horario: {{$curso->horario}} </p>
<hr>

@endforeach