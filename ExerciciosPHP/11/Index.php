<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Atividade Estados Brasileiros II</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class="p-2 mt-2 bg-info text-white">Estados das Regiões</h1>
        <form action="detalhes.php" method="POST">
            <p>Selecione uma região:
                <select name="regioes" class="form-select" aria-label="Default select example" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="Norte">Norte</option>
                    <option value="Nordeste">Nordeste</option>
                    <option value="Centro-Oeste">Centro-Oeste</option>
                    <option value="Sudeste">Sudeste</option>
                    <option value="Sul">Sul</option>
                </select>
            </p>
            <button type="submit" class="btn btn-light mt-2">Buscar</button>
        </form>
    </div>
</body>

</html>