<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Resultado</title>
</head>

<body>
    <div class='container border m-auto mt-3 p-3 w-25'>
        <?php

        extract($_REQUEST, EXTR_OVERWRITE);

        if ($sexo == "feminino") {
            echo "<h3 class='text-center'>Bem-Vinda $name!</h3>";
        } else {
            echo "<h3 class='text-center'>Bem-Vindo $name!</h3>";
        }

        if ($idade < 16) {
            echo "<h3 class='text-center bg-danger'>Voto proibido!</h3>";
        } elseif (($idade >= 16) && ($idade <= 17)) {
            echo "<h3 class='text-center bg-warning'>Voto opcional!</h3>";
        } elseif (($idade >= 18) && ($idade <= 70)) {
            echo "<h3 class='text-center bg-success'>Voto obrigatório!</h3>";
        } else {
            echo "<h3 class='text-center bg-warning'>Voto opcional!</h3>";
        }

        ?>
        <input type="button" value="Voltar" class="btn btn-primary" onClick="history.go(-1)">

    </div>
</body>

</html>