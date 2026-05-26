<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
        <div class="d-flex justify-content-center">
            <form action="{{route('professor.create')}}" method="post">
                    <fieldset>
                        <legend>Cadastro de professor</legend>

                        @csrf
                        
                        <div class="mb-3"> 
                            <label class="form-label" for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" id="nome" required autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" required autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="telefone">Nº Telefone</label>
                            <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Número de 11 digitos." required autocomplete="off" pattern="[0-9]{11}">
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                        </div>

                        @isset($success)
                            <div class="mb-3">
                            <p>{{$success}}</p>
                            </div>
                        @endisset

                        @isset($professores)
                            @foreach($professores as $professor)
                                <p>{{ $professor->nome }}</p>
                                <br>
                                <p>{{ $professor->email }}</p>
                                <br>
                                <p>{{ $professor->telefone }}</p>
                                <hr>
                            @endforeach
                    @endisset
                    </fieldset>
                </form>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>