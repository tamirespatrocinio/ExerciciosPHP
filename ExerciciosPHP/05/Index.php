<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Atividade Tabela</title>
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
  <script>
    function mostrar(opcao) {
      if (opcao == 'unidimensional') {
        qtdColunas.className = 'invisible';
      } else {
        qtdColunas.className = 'visible';
      }
      dimensao.className = "w-75 container border m-2 p-2 visible";
    }
  </script>

  <div class='container border m-auto mt-3 w-50'>
    <h1 class="text-center">Montar Tabela</h1>

    <form action="Tabela.php" method='Post'>

      <legend class="col-form-label col-sm-6 pt-0">Selecione a dimensão:</legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="dimensao" onclick="mostrar(this.value)" id="unidimensional" value="unidimensional" required>
        <label class="form-check-label" for="unidimensional">
          Unidimensional (uma coluna)
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="dimensao" onclick="mostrar(this.value)" id="bidimensional" value="bidimensional" required>
        <label class="form-check-label" for="bidimensional">
          Bidimensional (várias colunas)
        </label>
      </div>

      <div id="dimensao" class="w-75 container border m-2 p-2 invisible">

        <p>Preencha as dimensões da tabela:</p>

        <p>Quantidade de Linhas: <input type="number" name="inputLinhas" min="1" max="10" value="1" required></p>

        <p id="qtdColunas">Quantidade de Colunas: <input type="number" name="inputColunas" min="1" max="10" value="2" required></p>

      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-outline-info btn-sm mb-3 mx-2">Enviar</button>
        <button type="reset" class="btn btn-outline-info btn-sm mb-3" onclick="location.reload()">Limpar</button>
    </form>
  </div>

</body>

</html>