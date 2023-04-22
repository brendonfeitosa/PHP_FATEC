<?php
$flagexame = false;
$nome = "";
$nota1 = "";
$nota2 = "";
$nota3 = "";
$nota4 = "";
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    if (isset($_POST['exame'])) {
        $exame = $_POST['exame'];
        $media = $_POST['media'];

        $novamedia = ($media + $exame) / 2;

        if ($novamedia >= 5) {
            $msg = "<div class='alert alert-success' role='alert'>Parabéns {$nome}, você foi aprovado após o exame com a média " . number_format($novamedia, 2) . "</div>";
        } else {
            $msg = "<div class='alert alert-danger' role='alert'>{$nome}, você foi reprovado, sinto muito!.</div>";
        }
    } else {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


        if ($media >= 7) {
            $msg = "<div class='alert alert-success' role='alert'>Parabéns {$nome}, você foi aprovado com a média " . number_format($media, 2) . "</div>";
        } else {
            $msg = "<div class='alert alert-warning' role='alert'>{$nome}, você não foi aprovado, terá que realizar o exame.</div>";
            $flagexame = true;
        }
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio PHP 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-7">Cálcular média de aluno</h1>
        <hr class="my-3">

        <div class="container-fluid">
            <h1 class="display-6">Notas bimestrais</h1>
            <hr class="my-6">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="nome">Nome do aluno:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome; ?>" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota1">Nota 1:</label>
                    <input type="text" class="form-control" id="nota1" name="nota1" value="<?= $nota1; ?>" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota2">Nota 2:</label>
                    <input type="text" class="form-control" id="nota2" name="nota2" value=" <?= $nota2; ?>" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota3">Nota 3:</label>
                    <input type="text" class="form-control" id="nota3" name="nota3" value="<?= $nota3; ?>" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="nota4">Nota 4:</label>
                    <input type="text" class="form-control" id="nota4" name="nota4" value="<?= $nota4; ?>" required>
                </div>
                <?php if ($flagexame) { ?>

                    <div class="form-group col-md-2">
                        <br />
                        <label for="exame">Nota exame:</label>
                        <input type="text" class="form-control" id="exame" name="exame">
                        <input type="hidden" id="media" name="media" value="<?= $media; ?>">
                        <br />
                        <button type="submit" class="btn btn-outline-warning mb-2" name="recalcular">Recalcular</button>
                    </div>
                    <br />

                <?php } ?>
                <br />
                <button type="submit" class="btn btn-outline-success mb-2" name="calcular">Calcular</button>
                <a href="ex12.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
                <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
                <br />
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