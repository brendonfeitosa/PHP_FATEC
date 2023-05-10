<?php
require("header-inc.php");
require_once("connection.php");

if(isset($_POST['enviar'])) {
	$descricao = $_POST['descricao'];
	$data_inicio = $_POST['data_inicio'];
	$duracao = $_POST['duracao'];
	$idcontato = $_POST['idcontato'];
    
	//fazer uma validação em PHP para ver se os dados estão preenchidos

	require_once('connection.php');

	// MySQL query para inserir dados na tabela como insert into do SQL
	$mysql_query = "INSERT INTO contatos (nome, email, datanasc) VALUES ('{$nome}', '{$email}', '{$datanasc}')";
	echo $mysql_query;
	$result = $conn->query($mysql_query); //vai executar o comando acima e incluir na tabela.

	if($result === true) { //retorna se o dado foi inserido não
		$msg = "insert success";
		$msgerror = "";
	}
	else {
		$msg = "insert error";
		$msgerror = $conn->error;
	}

	//fechar a conexão
	mysqli_close($conn); //tenho que fechar a conexão, pois o banco de dados é limitado ao número de conexões

	header("Location: contatos.php?msg={$msg}&msgerror={$msgerror}");


}
else{
    $mysql_query = "SELECT * FROM contatos ORDER BY nome";
$result = $conn->query($mysql_query);

mysqli_close($conn);
}
?>

<div class="container">
	<h2>Comprimissos</h2>
  	<p>Cadastro de compromissos.</p>
  	<hr>  	
	<div class="wrapper">
		<form method="post">
			<label for="descricao">&nbsp;Descrição</label>
			<input type="text" name="descricao" id="descricao" class="form-control" required><br>
			<label for="date">&nbsp;Data de Inicio</label>
			<input type="date" name="data_inicio" id="data_inicio" class="form-control"required><br>
			<label for="duracao">&nbsp;Duração</label>
            <input type="text" name="duracao" id="duracao" class="form-control" style="width: 200px;"><br>
            <label for="idcontato">Contato</label>
            <select class="form-control" name="idcontato" id="idcontato">
                <option selected>...</option>
                <?php while($contatos = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>
                    <option value="<?=$contatos['id'] ?>"><?=$contatos['nome']?></option>
                <?php }?>
            </select>
            <br>
			<input type="submit" name="enviar" value="Inserir" class="btn btn-primary w100">
		</form>
	</div>
</div>

<?php require("footer-inc.php"); ?>