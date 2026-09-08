<div>
    <h1>TESTE</h1>
    @foreach ($produtos as $produto )
    <p>id - {{ $produto->produto_id }}</p>
    <p>nome - {{ $produto->nome }}</p>
    @endforeach
</div>