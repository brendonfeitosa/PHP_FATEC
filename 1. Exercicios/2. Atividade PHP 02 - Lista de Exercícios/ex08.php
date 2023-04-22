<?php
$vetJogos = array();
$vetNum = array();
$vetResultado = array();
$flagAuxiliar = false;
$msgResultado = null;
$msgJogos = null;
$apostas = 0;

for ($jogo = 0; $jogo < 10; $jogo++) {
    for ($num = 0; $num < 6; $num++) {

        $geradorSorteio = rand(1, 60);
        array_push($vetNum, $geradorSorteio);

        if (sizeof($vetNum) == 6) {

            $str_numeros = implode(" ; ", $vetNum);
            array_push($vetJogos, $str_numeros);
            $vetNum = array();
        }
    }
}

for ($tamanho = count($vetResultado); $tamanho < 6; $tamanho++) {
    $flagAuxiliar = true;
    $num = rand(1, 60);

    foreach ($vetResultado as $res) {
        if ($num == $res) {
            $flagAuxiliar = false;
        }
    }

    if ($flagAuxiliar == true) {
        array_push($vetResultado, $num);
    }
}

$resultado = implode(" ; ", $vetResultado);

$msgResultado .= "As dezenas sorteadas foram: [ $resultado] <br /><br />";

$contador = 1;
foreach ($vetJogos as $jogo) {
    $qtde_acertos = 0;
    $apostas = explode(" ; ", $jogo);
    foreach ($apostas as $m) {
        foreach ($vetResultado as $n) {
            if ($m == $n) {
                $qtde_acertos++;
            }
        }
    }

    $msgJogos .= "$contador º  [$jogo]. Você acertou [$qtde_acertos] números neste jogo. <br /> <br />";
    $contador++;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercício 8</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Sorteio da megasena</h1>
        <hr class="my-3">


        <?php
            echo $msgResultado;
            echo $msgJogos;
        ?>
        <a href="ex08.php"><button type="button" class="btn btn-outline-success mb-2" name="atualizar">Atualizar</button></a>
        <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>