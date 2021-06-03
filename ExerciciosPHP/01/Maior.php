<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Maior</title>
</head>
<style>
    h1 {
        color: orange;
    }
</style>

<body>

    <div class='container border m-auto mt-3 p-3 w-25'>

        <h1 class="text-center">Resultado:</h1>

        <?php
        $var1 = $_POST['inputValor1'];
        $var2 = $_POST['inputValor2'];

        if ($var1 > $var2) {
            echo "<h3 class='text-center'>$var1 é maior que $var2!</h3>";
        } elseif ($var1 == $var2) {
            echo "<h3 class='text-center'>$var1 e $var2 são iguais!</h3>";
        } else {
            echo "<h3 class='text-center'>$var1 é menor que $var2!</h3>";
        }
        ?>
    </div>
</body>

</html>