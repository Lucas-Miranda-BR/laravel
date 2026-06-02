<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
        <div class="d-flex justify-content-center">
            <form action="{{route('aluno.create')}}" method="post">
                    <fieldset>
                        <legend>Cadastro de aluno</legend>

                        @csrf

                        
                        <div class="mb-3"> 
                            <label class="form-label" for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" id="nome" required autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                        </div>

                        @isset($success)
                            <div class="mb-3">
                            <p>{{$success}}</p>
                            </div>
                        @endisset
                </fieldset>
            </form>
            <button><a href="{{route('aluno.read')}}">Listagem de alunos</a></button>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>