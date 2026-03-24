<table border="1" align="center">
    <tr>
    <th>Nome</th>
    <th>Valor</th>
    <th>ID</th>
    </tr>
@foreach ($produtos as $produto)
    <tr>
        <th>{{$produto['nome']}}</th>
        <th>R${{$produto['valor']}}</th>
        <th>{{$produto['id']}}</th>
    </tr>
@endforeach
</table>