<?php include("cabecalho.php")?>
        <h1 class="text-center">Cadastrar novo paciente</h1>
    </div>
    <form action="cadastro-ordem-servico.php">

          <div class="form-group">
            <label><strong>Paciente:</strong></label>
            <div class="input-group">
                <input name="paciente" class="form-control" placeholder="Digite o nome do paciente paciente" required>
            </div>
          </div>

          <div class="form-group">
            <label><strong>Sexo:</strong></label>
                <div class="form-check form-check-inline">
                    <input name="sexo-feminino" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input name="sexo-masculino" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Masculino</label>
            </div>
          </div>  

            <div class="form-group">
                <label><strong>Endereço:</strong></label>
                <div class="input-group">
                    <input name="endereco" class="form-control" placeholder="Endereço completo" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><strong>Cidade:</strong></label>
                    <div class="input-group">
                        <input name="paciente" class="form-control" placeholder="Cidade" required>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label><strong>Estado:</strong></label>
                    <div class="input-group">
                        <select id="estado" class="form-control" name="estado">
                        <option selected>São Paulo</option>
                        <option>Rio de Janeiro</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label><strong>UF:</strong></label>
                    <input type="text" class="form-control" id="uf" name="uf">
                </div>
            </div>
<?php include("rodape.php")?>


           
