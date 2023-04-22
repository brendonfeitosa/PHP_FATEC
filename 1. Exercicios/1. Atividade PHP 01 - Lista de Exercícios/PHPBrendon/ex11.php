<?php 
$msg = "";
if (isset($_GET['verificar'])) {
    $idade = $_GET['idade'];

    if ($idade >= 5 && $idade < 8) {
        $msg = "<div class='alert alert-danger' role='alert'>INFANTIL A.</div>";
    } elseif ($idade >= 8 && $idade < 12) {
        $msg = "<div class='alert alert-danger' role='alert'>INFANTIL B.</div>";
    } elseif ($idade >= 12 && $idade < 14) {
        $msg = "<div class='alert alert-warning' role='alert'>JUVENIL A.</div>";
    } elseif ($idade >= 14 && $idade < 18) {
        $msg = "<div class='alert alert-warning' role='alert'>JUVENIL B.</div>";
    } elseif ($idade >= 18) {
        $msg = "<div class='alert alert-success' role='alert'>ADULTOS.</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Verificar categoria de nadador</h1>
        <hr class="my-3">

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                    <label for="idade">Digite a idade do nadador:</label>
                    <input type="text" class="form-control" id="idade" name="idade" required>
                </div>
                <br />
                <button type="submit" class="btn btn-outline-success mb-2" name="verificar">Verificar</button>
                <a href="ex11.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
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