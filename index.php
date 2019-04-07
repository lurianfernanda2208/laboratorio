<?php include("cabecalho.php")?>
        <h1 class="text-center">Ordem de serviço</h1>
    </div>


    <div class="data">
        <label for="data">  Selecione a data: </label>
        <input name="data" type="date">
    </div>

    <section>
      <form action="cadastro-ordem-servico.php">
          <div class="form-group">
            <label for="paciente"><strong>Paciente:</strong></label>
            <div class="input-group">
                <span input-group-btn><a href="cadastro-paciente.php" class="btn btn-outline-primary">+</a></span>
                <input name="paciente" class="form-control" placeholder="Paciente" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputData"><strong>Data e Hora:</strong></label>
            <div class="input-group">
                <div class="input-group date data_formato" data-date-format="dd-mm-yyy HH:ii">
                  <input  type="text" class="form-control" name="data" placeholder="Data da ordem de serviço">
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                  </span>
                </div>
            </div>
          </div>

          <div>
            <label for="exames" id="exame">Exames:</label><br>
            <div class="listaexames">
              <input type="checkbox" name="exames[]" id="1"> Hemograma <br>
              <input type="checkbox" name="exames[]" id="2"> Colesterol <br>
              <input type="checkbox" name="exames[]" id="3"> TSH ultrasensivel <br>
              <input type="checkbox" name="exames[]" id="4"> PSA <br>
              <input type="checkbox" name="exames[]" id="5"> HCG Beta <br>
              <input type="checkbox" name="exames[]" id="6"> Creatinina <br>
              <input type="checkbox" name="exames[]" id="7"> Fator Rh <br>
              <input type="checkbox" name="exames[]" id="8"> Ureia <br>
              <input type="checkbox" name="exames[]" id="9"> HIV <br>
              <input type="checkbox" name="exames[]" id="10"> Ferro <br>
              <input type="checkbox" name="exames[]" id="11"> Glicemia <br>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>Médico:</strong></label>
            <div class="input-group">
                <span input-group-btn><a href="cadastro-medico.php" class="btn btn-outline-primary">+</a></span>
                <input name="medico" class="form-control" placeholder="Médico" required>
            </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1"><strong>Convênio:</strong></label>
            <div class="input-group">
                <input name="medico" class="form-control" placeholder="Ex: Unimed..." required>
            </div>
          </div>

        <!--<div class="form-group">
          <label for="convenio"><strong>Convênio:</strong></label>
          <select class="form-control" id="convenio">
              <option disabled selected>Convênio Médico</option>
              <option>Unimed</option>
              <option>HB saúde</option>
              <option>Austa</option>
          </select>
        </div>-->

        <div class="form-group col-md-6">
            <label for="exampleFormControlInput1"><strong>Posto de coleta:</strong></label>
            <div class="input-group">
                <input name="medico" class="form-control" placeholder="Nome:... Bairro:..." required>
            </div>
          </div>

        <!--<div class="form-group">
              <label for="exampleFormControlSelect1"><strong>Posto de Coleta:</strong></label>
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>Nome: Laboratório São camilo Bairro: Vila Rami</option>
                  <option>Nome: Laboratório Guimarães  Bairro: Av.Potirendaba</option>
                  <option>Nome: Lavoisier  Bairro: Av. 9 de Julho</option>
                  <option>Nome: Laboratório Unimed  Bairro: São Judas Tadeu</option>
              </select>
        </div>-->
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1"><strong>Observações:</strong></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" value="Cadastrar" class="btn btn-outline-primary">Salvar</button>

    </form>
    </section>
<?php include("rodape.php")?>