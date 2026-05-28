<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body>
    <h1>Listando Alunos</h1>
    @isset($alunos)
            @foreach($alunos as $aluno)
                <p>Nome: {{ $aluno->nome }}</p>
                <br>
                <p>ID: {{ $aluno->id }}</p>
                <hr>
            @endforeach
    @endisset
</body>
</html>