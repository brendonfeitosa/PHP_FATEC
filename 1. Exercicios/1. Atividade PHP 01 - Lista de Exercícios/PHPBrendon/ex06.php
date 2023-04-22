<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kminicial = $_POST['kminicial'];
    $kmfinal = $_POST['kmfinal'];
    $ltgasto = $_POST['ltgasto'];
    $precolitro = $_POST['precolitro'];

    if ($kmfinal > $kminicial) {
        $distanciapercorrida = $kmfinal - $kminicial;
        $vlgasto = $precolitro * $ltgasto;
        $kmlitros = $distanciapercorrida / $ltgasto;
        $msg = "<div class='alert alert-secondary' role='alert'>A distência percorrida foi $distanciapercorrida quilometros.<br />
                O valor total gasto foi de R$ " . number_format($vlgasto, 2, ',', '.') . ".<br />
                A média de consumo do carro foi de $kmlitros km/l.</div>";
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>A quilometragem final deve ser maior que a inicial, tente novamente!</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Gasto de veículo</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="kminicial">Quilometragem inicial:</label>
                    <input type="text" class="form-control" id="kminicial" name="kminicial" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="kmfinal">Quilometragem final:</label>
                    <input type="text" class="form-control" id="kmfinal" name="kmfinal" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="ltgasto">Litros consumidos:</label>
                    <input type="text" class="form-control" id="ltgasto" name="ltgasto" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="precolitro">Preço por litro:</label>
                    <input type="text" class="form-control" id="precolitro" name="precolitro" required>
                </div>
                <br />
                <button type="submit" class="btn btn-outline-success mb-2" name="calcular">Calcular</button>
                <a href="ex06.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
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