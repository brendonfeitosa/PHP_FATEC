<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("connection.php");

    //comando para deletar da tabela
    $mysql_query = "DELETE FROM contatos WHERE id={$id}";

    if($conn->query($mysql_query) === TRUE) {
        $msg = "delete success";
        $msgerror = "";
    }
    else {
        $msg = "delete error";
        $msgerror = $conn->error;
    }
    mysqli_close($conn);
}
else {
    $msg = "delete error";
    $msgerror = "O ID não foi informado!";
}
header("Location: contatos.php?msg={$msg}&msgerror={$msgerror}");

?>