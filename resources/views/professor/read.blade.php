<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar professores</title>
</head>
<body>
<table border="1">
                    <tr>
                        <td colspan="2">Ações</td>
                </tr>
                @isset($professores)
                @foreach($professores as $professor)
                <tr>
                    <td>
                        <p>{{ $professor->nome }}</p>
                    </td>
                    <td>
                    <p>{{ $professor->email }}</p>
                    </td>
                    <td>
                    <p>{{ $professor->telefone }}</p>
                    </td>
                    <td>
                            <form action="{{ route('professor.delete', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Deletar</button>
                            </form>
                    </td>
                    <td>
                            <form action="{{ route('professor.update', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                @endisset
            </table>
</body>
</html>