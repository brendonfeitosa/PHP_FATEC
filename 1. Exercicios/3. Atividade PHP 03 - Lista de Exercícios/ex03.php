<?php
$txt = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $compromisso = $_POST['compromisso'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    // verifica se o arquivo compromissos existente, se não cria um novo
    if (file_exists('compromissos.json')) {
        $compromissos = json_decode(file_get_contents('compromissos.json'), true);
    } else {
        $compromissos = [];
    }

    // Adiciona o novo compromisso ao final do vetor
    $compromissos[] = ['usuario' => $usuario, 'compromisso' => $compromisso, 'local' => $local, 'data' => $data, 'hora' => $hora];

    // Grava o vetor de compromissos atualizado no arquivo
    file_put_contents('compromissos.json', json_encode($compromissos));

    // Redireciona o usuário para a página de listagem de compromissos
    header('Location: listar_compromissos.php');

   /*  $criarArquivo = json_encode($dados);
    $arquivoJson = file_put_contents("compromisso.json", $criarArquivo); */

    /*     foreach ($dados as $d) {
        $txt .= json_encode($d["Usuario"] . "," . $d["Compromisso"] . "," . $d['Local'] . "," . $d['Data'] . "," . $d['Hora']);
    } */
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Exercicio 3</title>
</head>

<body>
    <div class="container-fluid p-4 mb-4 bg-light">
        <h2>Exercicio 3</h2>
        <hr><br>
        <div class="col-3">
            <form method="post">
                <input class="form-control" type="text" name="usuario" placeholder="Digite o nome do usuário" aria-label="Digite o nome do usuário" required>
                <br>
                <input class="form-control" type="text" name="compromisso" placeholder="Digite o compromisso" aria-label="Digite o compromisso" required>
                <br>
                <input class="form-control" type="text" name="local" placeholder="Digite o local" aria-label="Digite o local" required>
                <br>
                <label for="data">Informe a data:</label>
                <input class="form-control" type="date" name="data" required>
                <br>
                <label for="hora">Informe a hora:</label>
                <input class="form-control" type="time" name="hora" required>
                <br>
                <button type="submit" class="btn btn-success mb-2" name="processar">Processar</button>
                <a href="ex02.php"><button type="button" class="btn btn-secondary mb-2" name="resetar">Resetar</button></a>
                <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>


        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>