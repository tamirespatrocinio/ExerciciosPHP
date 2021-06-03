<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Regiões</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <?php
        $nomeRegiao = $_POST['regioes'];
        include "Matriz_Estados.inc";
        ?>
        <h1 class="p-2 mt-2 bg-info text-white">Estados da Região <?= $nomeRegiao ?></h1>
        <div class='container'>
            <?php
            for ($i = 0; $i < count($estados); $i++) {
                if ($nomeRegiao == $estados[$i][3]) {
                    echo ("  <div class='row p-2'>
                                    <div class='col my-auto'>
                                        <h6>Estado: <span class='text-info'>" . $estados[$i][1] . "</span></h6>
                                        <h6>Sigla: <span class='text-info'>" . $estados[$i][0] . "</span></h6>
                                        <h6>Capital: <span class='text-info'>" . $estados[$i][2] . "</span></h6>
                                        <h6>Região: <span class='text-info'>" . $estados[$i][3] . "</span></h6>
                                    </div>                                    
                                    <div class='col'>
                                        <img class='w-50 border d-block mx-auto' src='./Imagens/" . $estados[$i][4] . "' alt='Bandeira do Estado' />
                                    </div>
                                </div>");
                };
            }
            ?>
            <button class="btn btn-light mt-3" onclick="history.go(-1)">Voltar</button>
        </div>
</body>

</html>