<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Atividade Par e Impar</title>
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
        color: orangered;
    }
</style>

<body>
    <div class='container border m-auto mt-3 p-3 w-25'>

        <h1 class="text-center mb-4">Par ou Ímpar?</h1>

        <form action="ParImpar.php" method='Post'>
            <div class="row justify-content-center mb-3">
                <label for="inputValor" class="col-sm-2 col-form-label">Número:</label>
                <div class="col-md-2">
                    <input type="number" class="form-control" name="inputValor" id="inputValor" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-secondary btn-sm">Verificar</button>
            </div>
        </form>
    </div>

</body>

</html>