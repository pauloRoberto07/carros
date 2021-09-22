<?php
$id = $_GET['id'];

include("./Classes/conexao.php");

try{
    $stmt = $pdo->prepare("delete from tbCarro where idCarro='$id'");
    $stmt ->execute();

    $pdo = null;
}catch(PDOException $e) {
    echo "Erro: ". $e->getMessage();
}


?>