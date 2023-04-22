<?php
$altura = 0;
$peso = 0;
$msg = null;

if (isset($_GET['verificar'])) {
  $altura = $_GET['altura'];
  $peso = $_GET['peso'];

  $imc = $peso / ($altura ** 2);

  if ($imc < 18.5) {
    $msg = "<div class='alert alert-danger' role='alert'>Seu IMC é: ".number_format($imc)." Obesidade de [GRAU 0] e sua classificação é MAGREZA.</div>";
  } elseif ($imc >= 18.5 && $imc <= 24.9) {
    $msg = "<div class='alert alert-success' role='alert'>Seu IMC é: ".number_format($imc). " Obesidade de [GRAU 0] e sua classificação é NORMAL.</div>";
  } elseif ($imc >= 25 && $imc <= 29.9) {
    $msg = "<div class='alert alert-warning' role='alert'>Seu IMC é: ".number_format($imc). " Obesidade de [GRAU I] e sua classificação é SOBREPESO.</div>";
  } elseif ($imc >= 30 && $imc <= 39.9) {
    $msg = "<div class='alert alert-danger' role='alert'>Seu IMC é: ".number_format($imc). " Obesidade de [GRAU II] e sua classificação é OBESIDADE.</div>";
  } elseif ($imc >= 40) {
    $msg = "<div class='alert alert-danger' role='alert'>Seu IMC é: ".number_format($imc). " Obesidade de [GRAU III] e sua classificação é OBESIDADE GRAVE.</div>";
  }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercicio PHP 13</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid p-4 mb-4 bg-light">
    <h1 class="display-5">Cálculo IMC</h1>
    <hr class="my-3">
    <div class="container">
      <form method="GET">
        <div class="form-group col-md-2">
          <label for="altura">Altura:</label>
          <input type="text" class="form-control" id="altura" name="altura" required>
        </div>
        <div class="form-group col-md-2">
          <label for="peso">Peso:</label>
          <input type="text" class="form-control" id="peso" name="peso" required>
        </div>
        <br />
        <button type="submit" class="btn btn-outline-success mb-2" name="verificar">Verificar</button>
        <a href="ex13.php"><button type="button" class="btn btn-outline-secondary mb-2" name="limpar">Limpar</button></a>
        <a href="menu.php"><button type="button" class="btn btn-info mb-2" name="menu">Menu</button></a>
      </form> <br />
    </div>
  </div>
  <table class="table table-striped table table-sm table-responsive table align-middle">
    <div class="container">
      <thead>
        <tr>
          <th scope="col">IMC</th>
          <th scope="col">CLASSIFICAÇÃO</th>
          <th scope="col">OBESIDADE (GRAU)</th>
        </tr>
      </thead>
      <tbody class="container">
        <tr class="<?= ($imc < 18.5) ? "alert alert-danger" : "alert alert-secondary" ?>">
          <td>MENOR QUE 18,5</td>
          <td>MAGREZA</td>
          <td>0</td>
        </tr>
        <tr class="<?= ($imc >= 18.5 && $imc <= 24.9) ? "" : "alert alert-danger" ?>">
          <td>ENTRE 18,5 E 24,9</td>
          <td>NORMAL</td>
          <td>0</td>
        </tr>
        <tr class="<?= ($imc >= 25 && $imc <= 29.9) ? "alert alert-danger" : "" ?>">
          <td>ENTRE 25 E 29,9</td>
          <td>SOBREPESO</td>
          <td>I</td>
        </tr>
        <tr class="<?= ($imc >= 30 && $imc <= 39.9) ? "alert alert-danger" : "" ?>">
          <td>ENTRE 30 E 39,9</td>
          <td>OBSEIDADE</td>
          <td>II</td>
        </tr>
        <tr class="<?= ($imc >= 40) ? "alert alert-danger" : "" ?>">
          <td>MAIOR QUE 40</td>
          <td>OBSEIDADE GRAVE</td>
          <td>III</td>
        </tr>
      </tbody>
  </table>
  </div>
  <?php
    echo $msg;
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>