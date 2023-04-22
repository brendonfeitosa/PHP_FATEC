<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $qtdconsumida = $_POST['qtdconsumida'];
    $preco = $_POST['preco'];

    if ($qtdconsumida > 0) {
        $precofinal = $qtdconsumida * $preco;
        $msg = "<div class='alert alert-success' role='alert'>O preço final é de R$ " . number_format($precofinal, 2, ',', '.') . ". </div>";
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>ERRO! Informe uma quantidade válida</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Cálculo de Preço</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="preco">Preço por KG:</label>
                    <input type="text" class="form-control" id="preco" name="preco" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="qtdconsumida">Quantidade consumida:</label>
                    <input type="text" class="form-control" id="qtdconsumida" name="qtdconsumida" required>
                </div>
                <br />
                <button type="submit" class="btn btn-primary mb-2" name="calcular">Calcular</button>
                <a href="ex02.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
                <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
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