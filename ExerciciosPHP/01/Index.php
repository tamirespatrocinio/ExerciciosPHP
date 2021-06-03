<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Atividade Maior Número</title>
</head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    h1 {
        color: orange;
        font-size: 2rem;
    }
</style>

<body>

    <div class='container border m-auto mt-3 p-3 w-25'>


        <h1 class="text-center mb-4">Verificar o Maior Número</h1>

        <form action="Maior.php" method='Post'>
            <div class="row justify-content-center g-2 mb-4 col-auto">
                <div class="col-auto">
                    <p>Valor 1:</p>
                    <input type="number" class="form-control" name="inputValor1" id="inputValor1" required>
                </div>
            </div>

            <div class="row justify-content-center g-2 mb-4">

                <div class="col-auto">
                    <p>Valor 2:</p>
                    <input type="number" class="form-control" name="inputValor2" id="inputValor2" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary btn-sm mb-3">Verificar</button>
            </div>
        </form>
    </div>

</body>

</html>