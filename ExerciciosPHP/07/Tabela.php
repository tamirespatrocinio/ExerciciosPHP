<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Resultado</title>
</head>

<body>
    <div class="container border m-auto mt-3 p-3">

        <h1 class="text-center text-info">Tabela Com Seleção de Imagens</h1>
        <table class="table table-striped w-50 m-auto">
            <tr>
                <th>Local e Nome do arquivo</th>
                <th>Imagem</th>
            </tr>
            <?php
            $opcao = $_POST['number'];
            if ($opcao == 'impar') {
                $i = 1;
            } else {
                $i = 2;
            }
            for ($i; $i <= 20; $i += 2) {
                echo "<tr>";
                echo "<td>Imagem/" . $i . "</td>";
                echo "<td><img src='imagens/" . $i . ".png'</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button class="btn btn-outline-info btn-sm" onclick="history.go(-1)">Voltar</button>

    </div>
</body>

</html>