<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar cursos</title>
</head>
<body>
<table border="1">
                    <tr>
                        <td colspan="2">Ações</td>
                </tr>
                @isset($cursos)
                @foreach($cursos as $curso)
                <tr>
                    <td>
                        <p>{{ $curso->nome }}</p>
                    </td>
                    <td>
                    <p>{{ $curso->periodo }}</p>
                    </td>
                    <td>
                            <form action="{{ route('curso.delete', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Deletar</button>
                            </form>
                    </td>
                    <td>
                            <form action="{{ route('curso.update', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                @endisset
            </table>
</body>
</html>