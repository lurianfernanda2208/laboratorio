<?php require_once("cabecalho.php");
require_once("banco-ordem-servico.php");
require_once("logica-usuario.php");

verificaUsuario();
?>


    <form action="cadastro-ordem-servico.php" method="POST">
        <h1 class="text-center">Ordem de serviço</h1>
        </div>
      
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
            <input type="text" class="form-control date-mask col-sm-2 col-form-label" id="calendario" placeholder="dd/mm/aaaa" name="calendario" required></p>
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
              <input type="text" name="convenio" class="form-control col-sm-2 col-form-label" placeholder="Ex.Unimed">
          </div>
          </div>
        </div>

        <div class="form-group">
            <label><strong>Posto de coleta:</strong></label>
            <div class="input-group">
                <select id="coleta" class="form-control" name="coleta">
                <option>São Camilo - Av. Brasil</option>
                <option>Guimarães - Vila Arens</option>
                </select>
            </div>
         </div>

        <div class="form-group">
          <label><strong>Observações:</strong></label>
          <textarea type="text" name="observacao" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" value="cadastrar" class="btn btn-outline-primary">Salvar</button>
      </form>
    </section>
    <br/>
    
<?php include("rodape.php")?>