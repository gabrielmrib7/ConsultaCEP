<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1 class="mb-5">ADICIONAR CEP</h1>
<form action="{{route('buscar')}}" method="GET">
        <div class="form-group">
            <label>CEP</label>
            <input type="text" class="form-control" name="CEP" value="{{$cep}}">
        </div>
  <div class="form-group">
    <label>Logradouro</label>
    <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
</div>
  <div class="form-group">
    <label>Numero</label>
    <input type="text" class="form-control" name="numero">
</div>
  <div class="form-group">
    <label>Bairro</label>
    <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
</div>
  <div class="form-group">
    <label>Cidade</label>
    <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
</div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" name="estado" value="{{$estado}}">
</div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
