<?php
$nomeCarro = $_POST['nomeCarro'];
$corCarro = $_POST['corCarro'];
$marcaCarro = $_POST['marcaCarro'];
$velMaxCarro= $_POST['velMaxCarro'];

$id= $_POST['txPegaid'];

include("./Classes/conexao.php");


if($id>0){


    try{
        $stmt = $pdo->prepare("update tbCarro set nomeCarro='$nomeCarro', corCarro='$corCarro', marcaCarro='$marcaCarro', velMaxCarro='$velMaxCarro'  where idCarro='$id'");
        $stmt ->execute();

        $pdo = null;


    }catch(PDOException $e){
        echo "Erro: " .$e->getMessage();
    }

}else {
    try{
        $stmt = $pdo->prepare("insert into tbCarro values(null,'$nomeCarro', '$corCarro', '$marcaCarro', '$velMaxCarro')");
        $stmt ->execute();
    
        $pdo = null;
    
        header("Location:carros.php");
    
    }catch(PDOException $e){
        echo "Erro: " .$e->getMessage();
    } 
}
?>