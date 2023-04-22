<?php
$msg = null;
$msgcontador = null;
$contador = 0;
$msgprimos = null;
$contadorprimos = 1;
$par = 0;
$divisores = 0;
$contadornaoprimos = 0;
$num_inteiros = array(1020, 24, 100, 2, 58, 680, 77, 82, 92, 11, 101, 12, 13, 1004, 15, 116, 17, 1238, 19, 2020, 21, 2222, 2993, 2204, 225, 206, 287, 289, 29, 30, 31, 321, 3, 3456, 35, 36, 388, 37, 39, 40, 41, 42, 4321, 44, 4567, 46, 407, 48, 49, 50);

$arrlength = count($num_inteiros);

$msg .= "Números em ordem crescente! <br /> <br />";
for ($i = 0; $i < $arrlength; $i++) {
    sort($num_inteiros);
    $msg .= number_format($num_inteiros[$i], 0, ',', '.') . " ";
    if ($i % 10 == 0) {
        $msg .= "<br /> <hr />";
    }

    if ($num_inteiros[$i] % 2 == 0) {
        $contador++;
    }
}
$msgcontador .= "<br /> <br />Dos números testados <strong>[$contador] são pares</strong>.";

foreach ($num_inteiros as $vetor) {
    if ($vetor % 2 == 0) {
        $divisores++;
        if($vetor){
            
        }
    } else {
        $contadornaoprimos++;
    }
    if ($divisores == 2) {
        $contadorprimos++;
    }
}
$msgprimos .= "<br /> <br />Dos números testados <strong>[$contadorprimos] são primos</strong>.";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercício 5</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Números inteiros, quantidade de pares e primos</h1>
        <hr class="my-3">

        <?php
        echo $msg;
        echo $msgcontador;
        echo $msgprimos;
        ?>

        <br />
        <br />
        <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>