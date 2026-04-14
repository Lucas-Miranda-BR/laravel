<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Alunos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .success {
            margin-top: 10px;
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro de Aluno</h1>

    <form action="{{route('aluno.create')}}" method="post">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required autocomplete="off">

        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" required autocomplete="off">

        <button type="submit">Cadastrar</button>

        @isset($success)
            <div class="success">
                {{$success}}
            </div>
        @endisset
    </form>
</div>

</body>
</html>