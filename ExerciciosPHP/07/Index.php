<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Atividade Tabela com Seleção de Imagens</title>
</head>

<body>
    <div class="container border m-auto mt-3 p-3 w-25">
        <h1 class="text-center text-info">Tabela Com Seleção de Imagens</h1>

        <form action="tabela.php" method="POST">
            <p>Escolha uma opção:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="number" value="par" id="par" checked>
                <label class="form-check-label" for="flexRadioDefault1">Números Pares</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="number" value="impar" id="impar">
                <label class="form-check-label" for="flexRadioDefault2">Números Ímpares</label>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-outline-info btn-sm">Enviar</button>
                <button type="reset" class="btn btn-outline-info btn-sm">Limpar</button>
            </div>
        </form>
    </div>
</body>

</html>