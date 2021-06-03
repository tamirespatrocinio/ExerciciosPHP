<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Notícias Tecnológicas</title>
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
        <h1 class="p-2 m-2 bg-info text-white text-center">Notícias sobre Tecnologia</h1>
        <form action="listar.php" method="POST">
            <p class="m-2 pt-3"><strong>Assunto:</strong>
                <select name="noticiaGeral" class="form-select" aria-label="Default select example" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Mercado">Mercado</option>
                    <option value="Software">Software</option>
                </select>
            </p>
            <button type="submit" class="btn btn-light btn-sm m-2">Procurar</button>
        </form>
    </div>
</body>

</html>