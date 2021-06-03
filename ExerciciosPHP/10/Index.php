<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Atividade Estados Brasileiros</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class="p-2 bg-info text-white">Banco de Imagens</h1>

        <form action="Detalhes.php" method="POST">
            <P> Grupo de Imagens
                <select name="grupoImagens" class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                    include "Matriz_Estados.inc";
                    for ($i = 0; $i <= count($estados); $i++) {
                        echo ("<option value='$i'>" . $estados[$i][0] . "</option>");
                    }
                    ?>

                </select>
            </P>
            <button type="submit" class="btn btn-light">Buscar</button>

        </form>
    </div>
</body>

</html>