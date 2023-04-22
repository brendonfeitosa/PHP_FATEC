<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vtbranco = $_POST['vtbranco'];
    $vtnulo = $_POST['vtnulo'];
    $vtvalido = $_POST['vtvalido'];

    $totalvotos = $vtbranco + $vtnulo + $vtvalido;

    if ($totalvotos > 0) {
        $perctbranco = ($vtbranco / $totalvotos) * 100;
        $perctnulo = ($vtnulo / $totalvotos) * 100;
        $perctvalido = ($vtvalido / $totalvotos) * 100;
        $msg = "<div class='alert alert-success' role='alert'>Total de votos: [$totalvotos]. <br />
                Votos Válidos: [$vtvalido], representando  [".number_format($perctvalido, 2, ',','.')."%] do total.<br />
                Votos Válidos: [$vtbranco], representando  [".number_format($perctbranco, 2, ',','.')."%] do total.<br />
                Votos Válidos: [$vtnulo], representando  [".number_format($perctnulo, 2, ',','.')."%] do total.<br /></div>";
    } elseif ($totalvotos == 0) {
        $msg = "<div class='alert alert-warning' role='alert'>O total de votos foi 0 (zero)!</div>";
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>Algum dado foi inserido de forma errada, tente novamente!</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Cálculo de votos</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="vtbranco">Votos em branco:</label>
                    <input type="text" class="form-control" id="vtbranco" name="vtbranco" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="vtnulo">Votos nulos:</label>
                    <input type="text" class="form-control" id="vtnulo" name="vtnulo" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="vtvalido">Votos válidos:</label>
                    <input type="text" class="form-control" id="vtvalido" name="vtvalido" required>
                </div>
                <br />
                <button type="submit" class="btn btn-outline-success mb-2" name="calcular">Calcular</button>
                <a href="ex07.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
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