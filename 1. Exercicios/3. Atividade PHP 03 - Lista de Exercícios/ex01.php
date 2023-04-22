<?php
$msg = null;
if (isset($_GET['processar'])) {
    $frase1 = $_GET['frase1'];
    $frase2 = $_GET['frase2'];
    $frase3 = $_GET['frase3'];

    $arquivoFrase = fopen("brendon.txt", "w") or die("Arquivo não encontrado!");
    fwrite($arquivoFrase, $frase1);
    fwrite($arquivoFrase, "\n");
    fwrite($arquivoFrase, $frase2);
    fwrite($arquivoFrase, "\n");
    fwrite($arquivoFrase, $frase3);
    fwrite($arquivoFrase, "\n");
    fclose($arquivoFrase);

    //Lendo o arquivo
    $lerArquivo = fopen("brendon.txt", "r") or die("Arquivo não encontrado!");
    while (!feof($lerArquivo)) {
        $msg .= fgets($lerArquivo) . "<br />";
    }
    fclose($lerArquivo);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>exercicio 1</title>
</head>

<body>

    <div class="container-fluid p-4 mb-4 bg-light">
        <h2>Exercicio 1</h2>
        <hr><br>
        <div class="col-3">
            <form method="get">
                <input class="form-control" type="text" name="frase1" placeholder="Digite uma frase" aria-label="Digite uma frase">
                <br>
                <input class="form-control" type="text" name="frase2" placeholder="Digite uma frase" aria-label="Digite uma frase">
                <br>
                <input class="form-control" type="text" name="frase3" placeholder="Digite uma frase" aria-label="Digite uma frase">
                <br>
                <button type="submit" class="btn btn-success mb-2" name="processar">Processar</button>
                <a href="ex01.php"><button type="button" class="btn btn-secondary mb-2" name="limpar">Limpar</button></a>
                <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
            </form>
            <?php
                echo $msg;
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>