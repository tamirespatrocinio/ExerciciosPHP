<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class='container border m-auto mt-3 p-3 w-25'>
        <h1 class="text-center">Tabela de Imagens</h1>

        <table class="table table-borderless table-danger p-3">

            <?php

            $colunas = $_POST['inputQtd'];

            $x = 0;

            for ($i = 1; $i <= 20; $i++) {

                if ($x == 0) {
                    echo ("<tr>");
                }
                echo ("<th class='text-center'><img src='Imagens/$i.png'/></th>");
                $x++;

                if ($x == $colunas) {
                    echo ("</tr>");
                    $x = 0;
                }
            }
            echo "</table>";

            ?>

        </table>

        <input type="button" value="Voltar" class="btn btn-outline-dark btn-sm" onClick="history.go(-1)">

    </div>

</body>

</html>