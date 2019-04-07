<?php include("cabecalho.php")?>
<?php include("conecta.php")?>
<?php include("banco-ordem-servico.php");?>

<h1 class="text-center">Ordens de Serviço</h1>
</div>

<?php
   if(array_key_exists('removido', $_GET) && $_GET['removido']==true) {
?>
      <p class="alert-success">Ordem de serviço removida com sucesso!</p>
<?php
   }
?>

<table class="table table-striped table-bordered col-md-4">
      <?php
      $servicos = listaOrdemServico($conexao);
      foreach ($servicos as $servico) :
      ?>
      <tr>
         
         <td><?=$servico['paciente']?></td>
         
         <td><?=$servico['medico']?></td>
         <td>
            <a href="remove-ordem-servico.php?id=<?=$servico['id']?>" class="text-danger">remover</a>
         </td>
      </tr>
      <?php 
      endforeach 
      ?>
</table> 

<?php include("rodape.php")?>