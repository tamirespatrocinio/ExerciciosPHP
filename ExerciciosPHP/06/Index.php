<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Atividade Tabela Imagens</title>
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

  h1 {
    color: blueviolet;
  }
</style>

<body>

  <div class='container border m-auto mt-3 p-3 w-25'>
    <h1 class="text-center">Tabela de Imagens</h1>

    <form action="Tabela.php" method='Post'>
      <div class="row justify-content-center g-2 mb-4">
        <div class="col-auto">
          <label for="inputQtd" class="col-form-label">Preencha a quantidade de colunas:</label>
        </div>
        <div class="col-auto">
          <input type="number" min="1" max="5" value="1" name="inputQtd" id="inputQtd" class="form-control" required>
        </div>

      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-outline-dark btn-sm mb-3 mx-2">Enviar</button>
        <button type="reset" class="btn btn-outline-dark btn-sm mb-3" onclick="location.reload()">Limpar</button>
      </div>

    </form>




</body>

</html>