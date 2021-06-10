<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Total</title>
</head>
<body>
<div class="container border m-3">
<form action="Total.php" method="POST">
  <div class="row mb-3">
    <label for="produto" class="col-sm-2 col-form-label">Nome do Produto</label>
    <div class="col-sm-10">
      <input type="text" name="produto"class="form-control" id="produto">
    </div>
  </div>

  <div class="row mb-3">
    <label for="valor" class="col-sm-2 col-form-label">Valor</label>
    <div class="col-sm-10">
      <input type="text" name="valor" class="form-control" id="valor">
    </div>
  </div>

  <div class="row mb-3">
    <label for="quantidade" class="col-sm-2 col-form-label">Quantidade</label>
    <div class="col-sm-10">
      <input type="text" name="quantidade" class="form-control" id="quantidade">
    </div>
  </div>


  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Pagamento:</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pagamento" id="avista" value="avista" checked>
        <label class="form-check-label" for="avista">
          À vista (10% de desconto)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="pagamento" id="parcelado" value="parcelado">
        <label class="form-check-label" for="parcelado">
          Parcelado em 2x
        </label>
      </div>
      
    </div>
  </fieldset>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>
</body>
</html>