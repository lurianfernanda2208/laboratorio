<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-ordem-servico.php");
        
            
            $paciente = $_GET["paciente"];
            $medico = $_GET["medico"];
            /*$_checkbox = $_POST["exames"];
            foreach($_checkbox as $_valor){
                echo$_valor;
            }*/
            
            if(cadastroOrdemServico($conexao, $paciente, $medico)) { ?>
              <h1 class="text-center text-sucess">Ordem de serviço cadastrada com sucesso! </h1>
            <?php } else { 
              $msg = mysqli_error($conecao);
            ?>
            <h1 class="text-center text-danger">Ordem de serviço não foi cadastrada! </h1>

            <?php
            }
        ?>
      
        
      
<?php include("rodape.php")?>


<!--<?php
echo $dados=$_POST['dados'];
echo $dados[0].$dados[1];
?>-->