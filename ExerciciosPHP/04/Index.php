<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Atividade Total</title>
</head>
<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type="number"] {
    -moz-appearance: textfield;
  }
</style>

<body>
  <div class='container border m-auto mt-3 p-3 w-50'>

    <h1>Preencha os dados do produto</h1>

    <form action="Total.php" method='Post'>

      <div class="row mb-3">
        <label for="inputProduto" class="col-sm-2 col-form-label">Nome do Produto:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="inputProduto" id="inputProduto" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputValor" class="col-sm-2 col-form-label">Valor:</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="inputValor" id="inputValor" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputQuantidade" class="col-sm-2 col-form-label">Quantidade:</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="inputQuantidade" id="inputQuantidade" required>
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Pagamento:</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pagTipo1" id="pagTipo1" value="option1">
            <label class="form-check-label" for="pagTipo1">
              À vista (10% desconto)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pagTipo2" id="pagTipo2" value="option2">
            <label class="form-check-label" for="pagTipo2">
              Parcelamento em 2x
            </label>
          </div>

          <button type="submit" class="btn btn-primary mt-3">Enviar</button>
          <button type="reset" class="btn btn-primary mt-3">Limpar</button>
    </form>
  </div>

</body>

</html>