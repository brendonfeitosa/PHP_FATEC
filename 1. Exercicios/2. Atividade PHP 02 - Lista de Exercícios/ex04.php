<?php
$msg = null;

$msg = "<div class='tabuada' >";

for ($i = 1; $i <= 100 ; $i++) {
    $msg .="<div  class='tb'>";
    $msg .= "<strong>Tabuada do $i</strong><br />";
    for($j = 0; $j <= 10; $j++){
        $tabuada = $i * $j;
        
        $msg .= " $i x $j = $tabuada<br />";
    }
    $msg .="</div>";
   
}
$msg .="</div>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercício 4</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h1 class="display-5">Tabuada</h1>
        <div class="text-center">
            <hr class="my-3">
            <?php
                echo  $msg;
            ?>
            
            <br>
            <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>