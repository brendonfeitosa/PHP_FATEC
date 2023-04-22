<?php
$frase = "";
$qtd_letras = 0;
$qtd_palavras = 0;
$posicao = 0;
$msgposicao = "";
$msgencontrar = "";
$msg = "";
$vetencontrar = array();
$vetletras = array();
$i = 0;
$localizada = "";
$encontrar = "";
if (isset($_GET['analisar'])) {
    $frase = $_GET['frase'];
    $procurar = $_GET['buscafrase'];

    strtoupper($frase);
    strtoupper($procurar);

    $vetletras = str_split($frase);
    $vetencontrar = str_split($procurar);

    foreach ($vetletras as $letras) {
        if ($letras != " ") {
            $vetletras[$i] = $letras;
            $i++;
        }
    }
    $qtd_letras = $i;
    $posicao = strpos($frase, $encontrar);
    $localizada = substr($frase, $posicao, strlen($encontrar));
    $vetencontrar = explode(" ", $frase);

    if ($localizada != $procurar) {
        $msgencontrar .= "<br>A palavra digitada não foi encontrada!";
    } elseif ($localizada != "") {
        $msgencontrar .= "<br />A palavra $procurar foi encontrada.";
        $msgencontrar .= "<br />Sua posição inical é $posicao, e a final é " . strlen(($procurar) + $posicao - 1) . "<br />";
    }
    $msg .= "<br /><br />O texto tem $qtd_letras letras e " . count($vetencontrar) . " palavras.";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercício 7</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Analisador de texto</h1>
        <hr class="my-3">

        <form method="$_GET" class="form-floating">
            <div class="col-5">
                <label for="frase">Digite uma frase:</label>
                <input type="text" id="frase" name="frase" class="form-control" aria-labelledby="emailHelp">
                <br />
                <label for="buscafrase">Digite qual palavra deseja buscar:</label>
                <input type="text" id="buscafrase" name="buscafrase" class="form-control" aria-labelledby="emailHelp">
            </div>

            <?php
            echo $msgposicao;
            echo $msgencontrar;
            echo $msg;
            ?>
            
            <br />
            <br />
            <button type="submit" class="btn btn-outline-success mb-2" id="analisar" name="analisar">Analisar</button>
            <a href="ex07.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
            <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>