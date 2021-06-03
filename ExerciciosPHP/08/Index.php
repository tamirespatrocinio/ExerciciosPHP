<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Atividade Banco de Imagens</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class="p-2 mt-2 bg-info text-center text-white">Banco de Imagens</h1>

        <form action="Detalhes.php" method="POST">
            <P> Grupo de Imagens
                <select name="grupoImagens" class="form-select mt-2" aria-label="Default select example">
                    <option value="" disabled selected>Selecione</option>
                    <option value="Animais">Animais</option>
                    <option value="Cidades">Cidades</option>
                    <option value="Flores">Flores</option>
                    <option value="Florestas">Florestas</option>
                </select>
            </P>
            <button type="submit" class="btn btn-outline-primary">Buscar</button>

        </form>

    </div>
</body>

</html>