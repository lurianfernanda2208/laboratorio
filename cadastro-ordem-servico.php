<?php require_once("cabecalho.php");?>
<?php require_once("banco-ordem-servico.php");?>
<?php require_once("logica-usuario.php");

verificaUsuario();

        function dataBR($data){
          $dataBR = implode('/', array_reverse(explode('-', $data)));
          return $dataBR;
        }

        function dataUS($data){
          $dataUS = implode('-', array_reverse(explode('/', $data)));
          return $dataUS;
        }
        
        

        $paciente = $_POST["paciente"];
        $medico = $_POST["medico"];
        $calendario = dataUS($_POST["calendario"]);
        $convenio = $_POST["convenio"];
        $coleta = $_POST["coleta"];
        $observacao = $_POST["observacao"];
        
        
        if(cadastroOrdemServico($conexao, $paciente, $medico, $calendario, $convenio, $coleta, $observacao)) { ?>
          <h1 class="text-center text-sucess">Ordem de serviço cadastrada com sucesso! </h1>
        <?php } else { 
          $msg = mysqli_error($conexao);
        ?>
        <h1 class="text-center text-danger">Ordem de serviço não foi cadastrada! </h1>

        <?php
        }
        ?>

<?php include("rodape.php")?>
