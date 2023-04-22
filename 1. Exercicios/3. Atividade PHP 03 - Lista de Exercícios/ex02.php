<?php 
$msg = null;
$texto = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $time3 = $_POST['time3'];
    $time4 = $_POST['time4'];
    $time5 = $_POST['time5'];

    $arquivoTime = fopen("criartime.txt", "w") or die("Arquivo não encontrado!");
    fwrite($arquivoTime, $time1);
    fwrite($arquivoTime, "\n");
    fwrite($arquivoTime, $time2);
    fwrite($arquivoTime, "\n");
    fwrite($arquivoTime, $time3);
    fwrite($arquivoTime, "\n");
    fwrite($arquivoTime, $time4);
    fwrite($arquivoTime, "\n");
    fwrite($arquivoTime, $time5);
    fclose($arquivoTime);

    //lendo arquivo
    $lerArquivo = fopen("criartime.txt", "r") or die("Não consegui abrir o arquivo!");
    $novoArquivo = fopen("times.txt", "w") or die("Arquivo não encontrado!");
    while (!feof($lerArquivo)) {
        $texto .= fgets($lerArquivo);
    }
    fwrite($novoArquivo, $texto);
    fwrite($novoArquivo, "\n");
    fclose($novoArquivo);
    fclose($lerArquivo);

    //lendo arquivo time.txt
    $lerNovoArquivo = fopen("times.txt", "r") or die("Não consegui abrir o arquivo!");
    while(!feof($lerNovoArquivo)){
        $msg .= fgets($lerNovoArquivo) . "<br />";
    }
    fclose($lerNovoArquivo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercicio 2</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h2>Exercicio 2</h2>
        <hr><br>
        <div class="col-3">
            <form method="post">
                <input class="form-control" type="text" name="time1" placeholder="Digite o nome de um time de futebol" aria-label="Digite o nome de um time de futebol">
                <br>
                <input class="form-control" type="text" name="time2" placeholder="Digite o nome de um time de futebol" aria-label="Digite o nome de um time de futebol">
                <br>
                <input class="form-control" type="text" name="time3" placeholder="Digite o nome de um time de futebol" aria-label="Digite o nome de um time de futebol">
                <br>
                <input class="form-control" type="text" name="time4" placeholder="Digite o nome de um time de futebol" aria-label="Digite o nome de um time de futebol">
                <br>
                <input class="form-control" type="text" name="time5" placeholder="Digite o nome de um time de futebol" aria-label="Digite o nome de um time de futebol">
                <br>
                <button type="submit" class="btn btn-success mb-2" name="processar">Processar</button>
                <a href="ex02.php"><button type="button" class="btn btn-secondary mb-2" name="resetar">Resetar</button></a>
                <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
            </form>
        </div>
        <?php 
            echo $msg;        
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>