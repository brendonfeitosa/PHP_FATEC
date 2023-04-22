<?php
$op = 0;
$msgmenu = 0;
$vetor = 0;
$criarvetor = 0;
$media = 0;
$msgmedia = null;
$msgsoma = null;
$msgmin = null;
$msgmax = null;
$msgposicao = null;
if (isset($_GET['verificar'])) {
    $valor = $_GET['valor'];
    $vetor = array();
    if ($valor > 0) {
        for ($i = 0; $i < $valor; $i++) {
            $criarvetor = rand(1, 999999);
            array_push($vetor, $criarvetor);
        }
        if ($vetor != null) {
            $msgsoma .= "A soma dos valores do vetor é: [" . number_format(array_sum($vetor), 0, ',', '.') . "]";
            $media = array_sum($vetor) / $valor;
            $msgmedia .= "<br />A média dos valores do vetor é: [" . number_format($media, 2, ',', '.') . "]";
            $msgmin .= "<br />O menor valor do vetor é: [" . number_format(min($vetor), 0, ',', '.') . "]";
            $msgmax .= "<br />O menor valor do vetor é: [" . number_format(max($vetor), 0, ',', '.') . "]";
            foreach ($vetor as $key => $vet) {
                $msgposicao .= "Posição: [$key] = [" . number_format($vet, 0, ',', '.') . "]<br />";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercício 6</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Soma, média, maior e menor valor do array</h1>
        <hr class="my-3">
        <h3 style="font-weight: 100;">Digite quantas posições quer no vetor:</h3>
        <form method="$_GET" class="form-floating">
            <input type="number" min="1" class="form-control" id="valor" name="valor" placeholder="Digite um número inteiro positivo">
            <label for="floatingInputValue">Digite um número inteiro positivo:</label><br>

            <?php
                echo $msgsoma;
                echo $msgmedia;
                echo $msgmin;
                echo $msgmax;
                echo "<br />";
                echo $msgposicao;
            ?>
            <br />
            <br />
            <button type="submit" class="btn btn-outline-success mb-2" name="verificar">Verificar</button>
            <a href="ex06.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
            <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>