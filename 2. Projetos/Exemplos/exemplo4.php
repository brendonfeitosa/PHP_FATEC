<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo "Contando números";
    for ($i = 0; $i <= 10000; $i++) {
        if ($i % 2 == 0){
            echo "<strong>$i </strong>";
        }
        else {
            echo "$i ";
        }
        if($i % 10 == 0){
            echo "<hr /> <br />";
        }
    }

?>
</body>
</html>