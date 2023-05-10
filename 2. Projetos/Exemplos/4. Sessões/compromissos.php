<?php
require("header-inc.php");
//Selecionar a tabela

require_once('connection.php');



//MySQL query seleciona dados da tabela.
$mysql_query = "SELECT cp.id idcomp, cp.descricao descricao, cp.data_inicio data_inicio, cp.duracao duracao, 
cp.nomecontato nomecontato FROM contatos c, compromissos cp
        WHERE cp.idcontato = c.id ORDER BY cp.id";;//comando para buscar dados da tabela
$result = $conn->query($mysql_query);//executou o comando e pegou os dados

//fechar a conxão
mysqli_close($conn);

?> 
<div class="container">
  <h2>Contatos</h2>
  <p>Listagem do contatos cadastrados.</p>
  <hr>
  <div class="float-right p-1">
    <a href="insert-contato.php"><button type="button" class="btn btn-primary">Novo</button></a>
  </div>
  <table class="table table-striped table-bordered table-hover"> <!-- cabeçalho da tabela -->
    <thead>
      <tr class="table-info" style="text-align:center">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col">Nome</th>
        <th scope="col" style="width: 30%;">E-Mail</th>
        <th scope="col" style="width: 15%;">Data Nascimento</th>
        <th scope="col" style="width: 20%;">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        while($data = mysqli_fetch_array($result)) {//busca o resultado da conexão chamada result(os dados que vieram do banco)
      ?>
      <tr> 
        <th scope="row" style="text-align:center"><?php $data['id'];?></th>
        <td><?= $data['descricao'] ?></td> <!-- esta associando campos do array -->
        <td style="text-align:center"><?php echo date('d/m/Y', strtotime($data['data_inicio'])); ?></td> <!-- esta associando campos do array -->
        <td style="text-align:center">
          <a href="update-contato.php?id=<?= $data['id'] ?>">
            <button type="button" class="btn btn-primary">Editar</button></a>
          <a href="delete-contato.php?id=<?= $data['id'] ?>">
            <button type="button" class="btn btn-danger">Excluir</button></a>
        </td> 
      </tr>    
      <?php 
        }
      ?>
    </tbody>
  </table>
</div>

<?php require("footer-inc.php"); ?>