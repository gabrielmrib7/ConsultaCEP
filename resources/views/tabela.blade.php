<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUSCAR CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-0">
    <h1 class="my-5">Enderecos Cadastrados</h1>
    <a href="{{route('adicionar')}}" type="button" class="btn btn-dark">Adicionar CEP</a>

    @if (session('sucesso'))
        <div class="alert alert-success my-3" role="alert">
            {{session('sucesso')}}
    </div>

    @endif
    @if (session('erro'))
        <div class="alert alert-danger my-3" role="alert">
            {{session('erro')}}
        </div>
    @endif


<table class="table table-dark mt-5 shadow">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CEP</th>
      <th scope="col">Logradouro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Bairro</th>
      <th scope="col">Numero</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($enderecos as $endereco)
    <tr>
        <td>{{$endereco->id}}</td>
        <td>{{$endereco->cep}}</td>
        <td>{{$endereco->logradouro}}</td>
        <td>{{$endereco->cidade}}</td>
        <td>{{$endereco->estado}}</td>
        <td>{{$endereco->bairro}}</td>
        <td>{{$endereco->numero}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
