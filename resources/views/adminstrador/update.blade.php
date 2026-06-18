<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar adminstrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
        <div class="d-flex justify-content-center">
            <form action="{{route('adminstrador.save')}}" method="post">
                <fieldset>
                    <legend>Atualizar adminstrador</legend>

                    @csrf

                    <input type="hidden" name="id" value="{{ $adminstrador->id }}">
                        
                    <div class="mb-3"> 
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" required autocomplete="off" value="{{ $adminstrador->nome }}">
                    </div>

                    <div class="mb-3">
                            <label class="form-label" for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email" required autocomplete="off" value="{{ $adminstrador->email }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="telefone">Nº de Telefone</label>
                            <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Telefone deve ser 11 digitos." required autocomplete="off" pattern="[0-9]{11}" value="{{ $adminstrador->telefone }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="cpf">Nº de CPF</label>
                            <input class="form-control" type="number" name="cpf" id="cpf" placeholder="CPF deve ser 11 digitos." required autocomplete="off" value="{{ $adminstrador->cpf }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="usuario_nome">Nome de Usuario</label>
                            <input class="form-control" type="text" name="usuario_nome" id="usuario_nome"  required autocomplete="off" value="{{ $adminstrador->usuario_nome }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="senha">Senha</label>
                            <input class="form-control" type="password" name="senha" id="senha"  required autocomplete="off" value="{{ $adminstrador->senha }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <input class="form-control" type="text" name="status" id="status"  required autocomplete="off" maxlenght="50" value="{{ $adminstrador->status }}">
                        </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Atualizar</button>
                    </div>

                    @isset($success)
                        <div class="mb-3">
                            <p>{{$success}}</p>
                        </div>
                    @endisset
                    @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
