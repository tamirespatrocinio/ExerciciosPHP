<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Notícias</title>
</head>
<style>
    h1 {
        font-family: "Times New Roman";
    }

    body {
        font-family: "Helvetica"
    }
</style>

<body>
    <div class="container border m-4 p-2 mx-auto">
        <?php
        $noticia = $_POST['noticiaGeral'];
        include "Matriz_Noticias.inc";
        ?>
        <h1 class="p-2 bg-info text-white text-center">Notícias sobre Tecnologia -<span class="text-warning"> <?= $noticia ?></span></h1>
        <div class="container">
            <div class='row'>
                <?php
                for ($i = 0; $i < count($matriz_noticias); $i++) {
                    if ($noticia == $matriz_noticias[$i][0]) {
                        echo ("<div class='col text-center'>
                    <p class='font-weight-bold text-primary mt-2'><a href='detalhes.php?paginaListar=$i'>" . $matriz_noticias[$i][1] . "'</a></p>
                    <img class='img-thumbnail' src='" . $matriz_noticias[$i][3] . "' alt='Foto da Notícia' />
                    <p class='text-justify mt-2 p-1'>" . $matriz_noticias[$i][2] . "</p>
                    </div>");
                    }
                }
                ?>
            </div>
        </div>
        <button class="btn btn-light btn-sm mb-2 mx-3" onclick="history.go(-1)">Voltar</button>
    </div>
</body>

</html>