<?php
$msg = "";
if (isset($_GET['calcular'])) {
    $ladoa = $_GET['ladoa'];
    $ladob = $_GET['ladob'];
    $ladoc = $_GET['ladoc'];

    if ($ladoa < $ladob + $ladoc && $ladob < $ladoa + $ladoc && $ladoc < $ladoa + $ladob) {
        if ($ladoa == $ladob && $ladob == $ladoc && $ladoa == $ladoc) {
            $msg = "<div class='alert alert-secondary' role='alert'>Os valores digitados formam um triângulo EQUILÁTERO.</div>";
        } elseif ($ladoa != $ladob || $ladob != $ladoc || $ladoc != $ladoa) {
            $msg = "<div class='alert alert-secondary' role='alert'>Os valores digitados formam um triângulo ESCALENO.</div>";
        } else {
            $msg = "<div class='alert alert-secondary' role='alert'>Os valores digitados formam um triângulo ISÓSCELES.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>Os valores digitados não formam um triângulo.</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Lados de um triângulo</h1>
        <hr class="my-3">

        <div class="container">
            <form method="GET">
                <div class="form-group col-md-2">
                    <label for="ladoa">Lado A:</label>
                    <input type="text" class="form-control" id="ladoa" name="ladoa" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="ladob">Lado B:</label>
                    <input type="text" class="form-control" id="ladob" name="ladob" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="ladoc">Lado C:</label>
                    <input type="text" class="form-control" id="ladoc" name="ladoc" required>
                </div>
                <br />
                <button type="submit" class="btn btn-outline-success mb-2" name="calcular">Calcular</button>
                <a href="ex09.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
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