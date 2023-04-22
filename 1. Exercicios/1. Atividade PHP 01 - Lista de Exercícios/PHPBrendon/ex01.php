<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vlpago = $_POST['vlpago'];
    $preco = $_POST['preco'];

    if ($vlpago > $preco) {
        $troco = $vlpago - $preco;
        $msg = "<div class='alert alert-success' role='alert'>O troco é de R$ ".number_format($troco, 2, ',','.')." </div>";
    } elseif ($vlpago == $preco) {
        $troco = 0;
        $msg = "<div class='alert alert-success' role='alert'>O troco é de R$ ".number_format($troco, 2, ',','.')." </div>";
    } else {
        $troco = $vlpago - $preco;
        $diferenca = $troco * -1;
        $msg = "<div class='alert alert-danger' role='alert'>O valor pago é menor que o preço do produto, você ainda deve pagar R$ ".number_format($diferenca, 2, ',','.')." para completar o preço do produto.</div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Calculando Troco</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="preco">Preço do Produto:</label>
                    <input type="text" class="form-control" id="preco" name="preco" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="vlpago">Valor Pago:</label>
                    <input type="text" class="form-control" id="vlpago" name="vlpago" required>
                </div>
                <br />
                <button type="submit" class="btn btn-primary mb-2" name="calcular">Calcular</button>
                <a href="ex01.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
                <a href="menu.php"><button type="button" class="btn btn-primary mb-2" name="menu">Menu</button></a>
            </form>
        </div>
    </div>

    <?php 
        echo $msg;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>