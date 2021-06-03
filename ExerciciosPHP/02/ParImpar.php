<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<style>
    h1 {
        color: orangered;
    }
</style>

<body>

    <div class='container border m-auto mt-3 p-3 w-25'>

        <h1 class="text-center">Resultado:</h1>

        <?php
        $var = filter_input(INPUT_POST, "inputValor");

        if ($var % 2 == 0) {
            echo "<h3 class='text-center'>$var é par!</h3>";
        } else {
            echo "<h3 class='text-center'>$var é impar!</h3>";
        }
        ?>
        <input type="button" value="Voltar" class="btn btn-outline-secondary btn-sm" onClick="history.go(-1)">
    </div>
</body>

</html>