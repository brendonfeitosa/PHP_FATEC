<?php
// Lê o arquivo de compromissos
$compromissos = json_decode(file_get_contents('compromissos.json'), true);

// Recebe o usuário a ser listado (se informado)
$usuario = $_GET['usuario'] ?? '';

// Filtra os compromissos pelo usuário informado
if ($usuario) {
  $compromissos = array_filter($compromissos, function ($c) use ($usuario) {;
    return $c['usuario'] == $usuario;
  });
}


// Exibe a lista de compromissos
echo "<h1>Lista de compromissos</h1>";

if ($usuario) {


  echo "<p>Compromissos de $usuario:</p>";
}

echo "<ul>";

foreach ($compromissos as $c) {


  echo "<li>";


  echo "{$c['compromisso']} em {$c['data']} às {$c['hora']} em {$c['local']}";


  echo " <a href=\"excluir_compromisso.php?usuario={$c['usuario']}&compromisso={$c['compromisso']}\" onclick=\"return confirm('Tem certeza que deseja excluir este compromisso?')\">[excluir]</a>";


  echo "</li>";
}

echo "</ul>";

function ($c) use ($usuario) {


  return $c['usuario'] == $usuario;
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