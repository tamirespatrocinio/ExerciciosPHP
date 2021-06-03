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
    <div class='container border m-auto mt-3 p-3 w-25'>

        <?php
        $id = $_POST['inputProduto'];
        $preco = $_POST['inputValor'];
        $quantidadeProduto = $_POST['inputQuantidade'];
        $desconto = $_POST['pagTipo1'] ?? "";
        $parcelamento = $_POST['pagTipo2'] ?? "";

        $total = $preco * $quantidadeProduto;

        if ($desconto) {
            $valorpercentual = $total * 10;
            $valorDesconto = $valorpercentual / 100;
            $valorFinal = $total - $valorDesconto;
            echo ("<h3>Produto: $id</br>
            Valor: $preco</br>
            Quantidade: $quantidadeProduto</br>
            Total: $total</br>
            Total com desconto à vista: $valorFinal</h3>");
        } else {
            $valorParcela = $total / 2;
            echo ("<h3>Produto: $id</br>
            Valor: $preco</br>
            Quantidade: $quantidadeProduto</br>
            Total: $total</br>
            Total parcelado: 2x de $valorParcela</h3>");
        }
        ?>
        <input type="button" value="Voltar" class="btn btn-primary" onClick="history.go(-1)">
    </div>
</body>

</html>