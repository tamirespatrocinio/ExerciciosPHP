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
    <div class="container border m-auto mt-3 p-3 w-50">
        <?php
        $dimensao = $_POST['dimensao'];
        $linha = $_POST['inputLinhas'];
        $coluna = $_POST['inputColunas'];

        if ($dimensao == 'unidimensional') {
            echo "<h2 class='text-uppercase'>Tabela Unidimensional com $linha linha(s)</h2>";
            echo "<table class='table table-bordered border-secondary'>";
            for ($i = 1; $i <= $linha; $i++) {
                echo "<tr><td>Linha</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h2 class='text-uppercase'>Tabela Bidimensional com $linha linha(s) e $coluna coluna(s)</h2>";
            echo "<table class='table table-bordered border-secondary'>";

            $x = 0;

            for ($i = 1; $i <= ($coluna * $linha); $i++) {

                if ($x == 0) {
                    echo "<tr>";
                }
                echo "<th class='text-center text-secondary'> Células </th>";
                $x++;

                if ($x == $coluna) {
                    echo "</tr>";
                    $x = 0;
                }
            }
            echo "</table>";
        }
        ?>
        <input type="button" value="Voltar" class="btn btn-outline-info btn-sm" onClick="history.go(-1)">
    </div>
</body>

</html>