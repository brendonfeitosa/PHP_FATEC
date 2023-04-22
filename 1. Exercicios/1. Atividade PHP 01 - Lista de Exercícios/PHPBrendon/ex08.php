<?php
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $totalparcelas = $_POST['totalparcelas'];
    $parcelaspagas = $_POST['parcelaspagas'];
    $vlatualparcelas = $_POST['vlatualparcelas'];

    $qtdparcelasfim = $totalparcelas - $parcelaspagas;
    $saldodevedor = $qtdparcelasfim * $vlatualparcelas;

    if ($saldodevedor >= 0) {
        $msg = "<div class='alert alert-secondary' role='alert'>Total de parcelas: [$totalparcelas]. <br />
                Parcelas pagas: [$parcelaspagas].<br />
                Valor atual das parcelas: [ R$ " . number_format($vlatualparcelas, 2, ',', '.') . "].<br />
                Saldo devedor atual: [R$ " . number_format($saldodevedor, 2, ',', '.') . "].<br />
                Parcelas a pagar: [$qtdparcelasfim].</div>";
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
    <title>Exercicio PHP 08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Saldo devedor do consórcio</h1>
        <hr class="my-3">

        <div class="container">
            <form method="POST">
                <div class="form-group col-md-2">
                    <label for="totalparcelas">Total de prestações:</label>
                    <input type="text" class="form-control" id="totalparcelas" name="totalparcelas" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="parcelaspagas">Total de prestações pagas:</label>
                    <input type="text" class="form-control" id="parcelaspagas" name="parcelaspagas" required>
                </div>
                <br />
                <div class="form-group col-md-2">
                    <label for="vlatualparcelas">Valor atual das prestações:</label>
                    <input type="text" class="form-control" id="vlatualparcelas" name="vlatualparcelas" required>
                </div>
                <br />
                <button type="submit" class="btn btn-outline-success mb-2" name="calcular">Calcular</button>
                <a href="ex08.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
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