<?php require_once("cabecalho.php");
require_once("banco-ordem-servico.php");
require_once("logica-usuario.php");

verificaUsuario();
?>

<h1 class="text-center">Ordens de Serviço</h1>
</div>


<?php
   if(array_key_exists('removido', $_GET) && $_GET['removido']==true) {
?>
      <p class="alert-success text-center">Ordem de serviço removida com sucesso!</p>
<?php
   }
?>


<table class="table table-striped table table-bordered">
      <?php
      $servicos = listaOrdemServico($conexao);
      foreach ($servicos as $servico) :
      ?>
         
         <tr>
            <td><?=$servico['paciente']?></td>

            <td><?=$servico['medico']?></td>
            
            <td><?=strftime('%d/%m/%Y',strtotime($servico['calendario']))?></td>

            <td><?=$servico['convenio']?></td>

            <td><?=$servico['coleta']?></td>

            <td><?=$servico['observacao']?></td>

            <td><a class="btn btn-outline-success btn-sm" href="altera-lista-ordem-servico.php?id=<?=$servico['id']?>">Alterar</a></td>
            
            <td>
               <form action="remove-ordem-servico.php" method="post">
                  <input type="hidden" name="id" value="<?=$servico['id']?>">
                  <button class="btn btn-outline-danger btn-sm">remover</button>
               </form>
            </td>
         </tr>

      <?php 
      endforeach 
      ?>
</table>

<?php include("rodape.php")?>