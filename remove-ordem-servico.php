<?php require_once("cabecalho.php");
 require_once("banco-ordem-servico.php");

$id = $_POST['id'];
removeOrdemServico($conexao, $id); 
header("Location: lista-ordem-servico.php?removido=true");
die();
?>
