<?php require_once("cabecalho.php");?>
<?php require_once("banco-ordem-servico.php");
         
        function dataBR($data){
          $dataBR = implode('/', array_reverse(explode('-', $data)));
          return $dataBR;
        }
        
        function dataUS($data){
          $dataUS = implode('-', array_reverse(explode('/', $data)));
          return $dataUS;
        }

        $id = $_POST["id"];
        $paciente = $_POST["paciente"];
        $medico = $_POST["medico"];
        $calendario = dataUS($_POST["calendario"]);
        $convenio = $_POST["convenio"];
        $coleta = $_POST["coleta"];
        $observacao = $_POST["observacao"];
        
        
        if(alteraOrdemServico($conexao, $id, $paciente, $medico, $calendario, $convenio, $coleta, $observacao)) { ?>
          <h1 class="text-center text-sucess">Ordem de serviço alterada com sucesso! </h1>
        <?php } else { 
          $msg = mysqli_error($conexao);
        ?>
        <h1 class="text-center text-danger">Ordem de serviço não foi alterada! </h1>

        <?php
        }
        ?>

<?php include("rodape.php")?>