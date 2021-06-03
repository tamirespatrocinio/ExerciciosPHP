<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Detalhes</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <?php
        $nestados = $_POST['grupoImagens'];
        include "Matriz_Estados.inc";
        ?>
        <h1 class="p-2 mt-2 bg-info text-white">Estado: <?= $estados[$nestados][1] ?></h1>
        <div class='row p-3'>
            <div class='col my-auto'>
                <h4>Sigla:<span class="text-info"> <?= $estados[$nestados][0] ?></span></h4>
                <h4>Capital:<span class="text-info"> <?= $estados[$nestados][2] ?></span></h4>
                <h4>Região:<span class="text-info"> <?= $estados[$nestados][3] ?></span></h4>
            </div>
            <div class='col'>
                <img class='w-75 border d-block mx-auto' src='./Imagens/<?= $estados[$nestados][4] ?>' alt='Bandeira do Estado' />
            </div>
        </div>
        <button class="btn btn-light mt-2" onclick="history.go(-1)">Voltar</button>
    </div>

</body>

</html>