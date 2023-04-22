<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $somanotas = $nota1 + $nota2 + $nota3 + $nota4;
    $media = $somanotas / 4;

    if ($media >= 7) {
        $msg = "<div class='alert alert-success' role='alert'>APROVADO! A média do aluno foi [$media]. </div>";
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>REPROVADO! A média do aluno foi [$media].</div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Calculando a média aritmética</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="nota1">Digite a primeira nota:</label>
                    <input type="text" class="form-control" id="nota1" name="nota1" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota2">Digite a segunda nota:</label>
                    <input type="text" class="form-control" id="nota2" name="nota2" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota3">Digite a terceira nota:</label>
                    <input type="text" class="form-control" id="nota3" name="nota3" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota4">Digite a quarta nota:</label>
                    <input type="text" class="form-control" id="nota4" name="nota4" required>
                </div>
                <br />
                <button type="submit" class="btn btn-primary mb-2" name="calcular">Calcular</button>
                <a href="ex05.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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