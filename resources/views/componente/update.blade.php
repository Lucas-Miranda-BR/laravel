<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar componente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
        <div class="d-flex justify-content-center">
            <form action="{{route('componente.save')}}" method="post">
                <fieldset>
                    <legend>Atualizar componente</legend>

                    @csrf

                    <input type="hidden" name="id" value="{{ $componente->id }}">
                        
                    <div class="mb-3"> 
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" required autocomplete="off" value="{{ $componente->nome }}">
                    </div>

                    <div class="mb-3">
                            <label class="form-label" for="data_inicio">Inicio</label>
                            <input class="form-control" type="datetime" name="data_inicio" id="data_inicio" required autocomplete="off" value="{{ $componente->data_inicio }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="data_fim">Fim</label>
                            <input class="form-control" type="datetime" name="data_fim" id="data_fim" required autocomplete="off" value="{{ $componente->data_fim }}">
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
