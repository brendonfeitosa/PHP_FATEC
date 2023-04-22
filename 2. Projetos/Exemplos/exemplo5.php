<?php 
    $arr = array(1, 2, 3, 4);

    foreach ($arr as &$valor) { //& é o mesmo que o ref do c# (ponteiro)
        $valor = $valor * 2;
    }

    print_r($arr);
    echo "<br />";
    echo "<br />";
?>

<?php 
    $arr = array(1, 2, 3, 4);

    foreach ($arr as $valor) { //sem ponteiro
        $valor = $valor * 2;
    }

    print_r($arr);
    echo "<br />";
?>