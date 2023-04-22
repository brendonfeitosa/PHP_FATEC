<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    
    <?php 
        echo "<p>Olá mundo!</p>";
        print "<p>Olá! Hoje é " . date('d/m/Y') . ". Dia do PI.</p>";
        //Variaveis
        $x = 10;

        echo $x . "<br>";

        $x = 5;
        $y = 10;

        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15

        echo "<br>";
        
        $x = 5985;
        echo $x;
        echo "<hr>";
        var_dump($x);
        
        echo "<br>";
        echo "<br>";

        echo(rand(10, 100));
    ?>

</body>
</html>