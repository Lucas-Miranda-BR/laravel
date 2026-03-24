<h1>Primeiro valor = {{$n1}}</h1>
<br>
<h1>Segundo valor = {{$n2}}</h1>
<br>
@if ($n1 <= 0 || $n2 <= 0)
    <h1>Não é permitido valores negativos ou iguais a zero</h1>
@else
<h1>Multiplicação = {{$n1 * $n2}}</h1>
@endif
