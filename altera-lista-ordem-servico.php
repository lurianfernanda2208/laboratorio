<?php require_once("cabecalho.php");
require_once("banco-ordem-servico.php");

$id = $_GET['id'];
$servico = buscaOrdemServico($conexao, $id);

?>
        <h1 class="text-center">Alterando ordem de serviço</h1>
    </div>

    <section>
      <form action="altera-ordem-servico.php" method="POST">
            <input type="hidden" name="id" value="<?=$servico['id']?>">

            <div class="form-group">
            <label><strong>Paciente:</strong></label>
            <div class="input-group">
            <span input-group-btn><a href="cadastro-paciente.php" class="btn btn-outline-primary">+</a></span>
                <select id="paciente" class="form-control" name="paciente" value="<?=$pacientes['paciente']?>">
                
                  <?php
                  $paciente = buscaPaciente($conexao);
                  foreach ($paciente as $value){
                  echo "<option>". $value['paciente']."  </option>";
                  }
                  ?>               
               
                </select>
            </div>
         </div>

      
          <div clas="form-group">
            <label><strong>Data:</strong></label>
            <div class="col-sm-10">
            <label class="sr-only"></label>
            <div class="input-group datepicker row">
              <input type="text" name="calendario" value="<?=strftime('%d/%m/%Y',strtotime($servico['calendario']))?>" class="form-control date-mask col-sm-2 col-form-label" id="calendario" placeholder="dd/mm/aaaa" required></p>
            </div>
          </div>
  

          <div class="form-group">
            <label><strong>Médico:</strong></label>
            <div class="input-group">
                <select id="medico" class="form-control" name="medico" value="<?=$servico['medico']?>">
                               
                  <?php
                  $medicos = buscaMedico($conexao);
                  foreach ($medicos as $value){
                  echo "<option>". $value['medico']." </option>";
                  }
                  ?>               
               
                </select>
            </div>
          </div>


          <div class="form-group row">
            <div class="input-group">
            <div class="col-sm-10">
            <label><strong>Convênio:</strong></label>
                <input type="text" name="convenio" value="<?=$servico['convenio']?>" class="form-control col-sm-2 col-form-label" placeholder="Ex.Unimed">
            </div>
            </div>
          </div>

        <div class="form-group">
            <label><strong>Posto de coleta:</strong></label>
            <div class="input-group">
                <input type="text" name="coleta" value="<?=$servico['coleta']?>" class="form-control" placeholder="Nome e Bairro" required>
            </div>
          </div>

        <div class="form-group">
          <label><strong>Observações:</strong></label>
          <textarea type="text" name="observacao" class="form-control" rows="3"><?=$servico['observacao']?></textarea>
        </div>
        <button type="submit" value="cadastrar" class="btn btn-outline-primary">Alterar</button>
      </form>
    </section>
    <br/>
    
<?php include("rodape.php")?>