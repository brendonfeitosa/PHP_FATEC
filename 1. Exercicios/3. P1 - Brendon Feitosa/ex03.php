<?php
$texto = "";
$dados = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeUsuario = $_POST['nome'];
    $professor = $_POST['professor'];
    $funcionario = $_POST['funcionario'];
    $aluno = $_POST['aluno'];
    $livro = $_POST['livro'];

    if ($aluno) {
        $dados = array('Nome:' => 'nome', '\n Tipo de Usuário:' => 'aluno', '\n Livro retirado:' => 'livro');
    } elseif ($professor) {
        $dados = array('Nome:' => 'nome', '\n Tipo de Usuário:' => 'professor', '\n Livro retirado:' => 'livro');
    } elseif ($funcionario) {
        $dados = array('Nome:' => 'nome', '\n Tipo de Usuário:' => 'funcionario', '\n Livro retirado:' => 'livro');
    }

    if (isset($_POST['registrar'])) {
        $myfile = fopen("emprestimos.txt", "w")
            or die("Arquivo não encontrado!");
        $texto .= "BIBLIOTECA FATEC/PP - 11/04/2023 19:00 \n";
            fwrite($myfile, $texto);
        foreach ($dados as $key => $d) {
            $texto .= $d['Nome:'] . $d['Tipo de Usuário:'] . $d['Livro retirado:'];
        }
        fwrite($myfile, $texto);
        fclose($myfile);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <thead>
        <h3>BIBLIOTECA FATEC/PP</h3>
    </thead>

    <section>
        <form method="POST">
            <div>
                <label for="nome">Nome do usuário</label>
                <input type="text" name="nome" id="nome">
                <br><br>
            </div>
            <div>
                <label><em>Tipo de usuário:</em></label>
                <br><br>
                <label for="professor">Professor</label>
                <input type="checkbox" name="professor" id="professor">
                <label for="aluno">Aluno</label>
                <input type="checkbox" name="aluno" id="aluno">
                <label for="funcionario">Funcionario</label>
                <input type="checkbox" name="funcionario" id="funcionario">
                <br><br>
            </div>
            <div>
                <label for="livro">Nome do livro</label>
                <input type="text" name="livro" id="livro">
                <br><br>
            </div>

            <br />
            <button type="submit" class="btn btn-primary mb-2" name="registrar">Registrar</button>
            <a href="ex03.php"><button type="button" name="limpar">Limpar</button></a>
        </form>

    </section>

</body>

</html>