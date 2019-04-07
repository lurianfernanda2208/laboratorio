<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-ordem-servico.php");

$id = $_GET['id'];
removeOrdemServico($conexao, $id); 
header("Location: lista-ordem-servico.php?removido=true");
die();
?>
