<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Atividade Boas Vindas</title>
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
  <div class='container border m-auto mt-3 p-3 w-25'>

    <h1 class="text-center mb-4">Informe seus dados</h1>

    <form action="BoasVindas.php" method='Post'>
      <div class="row mb-3">
        <label for="inputName" class="form-label">Nome:</label>
        <div class="col">
          <input type="text" class="form-control" name="name" id="name" required>
        </div>
      </div>

      <div class="row mb-3 col-md-3">
        <label for="inputAge" class="form-label">Idade:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="idade" id="idade" required>
        </div>
      </div>

      <legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
        <label class="form-check-label" for="feminino">
          Feminino
        </label>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
        <label class="form-check-label" for="masculino">
          Masculino
        </label>
      </div>

      <button type="submit" class="btn btn-primary btn-sm mb-3">Enviar</button>
      <button type="reset" class="btn btn-primary btn-sm mb-3">Limpar</button>

    </form>
  </div>

</body>

</html>