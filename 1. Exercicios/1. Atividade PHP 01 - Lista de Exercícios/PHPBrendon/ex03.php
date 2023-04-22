<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_POST['num'];

    if ($num > 10) {
        $msg = "<div class='alert alert-success' role='alert'>O número [$num] é maior que 10.</div>";
    } else {
        $msg = "<div class='alert alert-warning' role='alert'>O número [$num] é menor que 10.</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Validação de número digitado</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="num">Digite um número:</label>
                    <input type="text" class="form-control" id="num" name="num" required>
                </div>
                <br />
                <button type="submit" class="btn btn-primary mb-2" name="processar">Validar</button>
                <a href="ex03.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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