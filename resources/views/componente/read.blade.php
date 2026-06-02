<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar componentes</title>
</head>
<body>
<table border="1">
                    <tr>
                        <td colspan="2">Ações</td>
                </tr>
                @isset($componentes)
                @foreach($componentes as $componente)
                <tr>
                    <td>
                        <p>{{ $componente->nome }}</p>
                    </td>
                    <td>
                    <p>{{ $componente->data_inicio }}</p>
                    </td>
                    <td>
                        <p>{{ $componente->data_fim }}</p>
                    </td>
                    <td>
                            <form action="{{ route('componente.delete', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Deletar</button>
                            </form>
                    </td>
                    <td>
                            <form action="{{ route('componente.update', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                @endisset
            </table>
</body>
</html>