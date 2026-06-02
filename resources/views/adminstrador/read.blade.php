<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar adminstradores</title>
</head>
<body>
<table border="1">
                    <tr>
                        <td colspan="2">Ações</td>
                </tr>
                @isset($adminstradores)
                @foreach($adminstradores as $adminstrador)
                <tr>
                    <td>
                        <p>{{ $adminstrador->nome }}</p>
                    </td>
                    <td>
                        <p>{{ $adminstrador->email }}</p>
                    </td>
                    <td>
                        <p>{{ $adminstrador->telefone }} </p>
                    </td>
                    <td>
                        <p>{{ $adminstrador->cpf }} </p>
                    </td>
                    <td>
                        <p>{{ $adminstrador->usuario_nome }}</p>
                    </td>
                    <td>
                        <p>{{ $adminstrador->status }}</p>
                    </td>
                    <td>
                            <form action="{{ route('adminstrador.delete', ['id' => $adminstrador->id]) }}" method="GET">
                                <button type="submit">Deletar</button>
                            </form>
                    </td>
                    <td>
                            <form action="{{ route('adminstrador.update', ['id' => $adminstrador->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                @endisset
            </table>
</body>
</html>