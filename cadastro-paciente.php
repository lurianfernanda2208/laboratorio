<?php require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

?>


        <h1 class="text-center">Cadastrar novo paciente</h1>
    </div>
    <form method="post" action="cadastro-ordem-servico.php">

          <div class="form-group">
            <label><strong>Paciente:</strong></label>
            <div class="input-group">
                <input name="paciente" class="form-control" placeholder="Digite o nome do paciente" required>
            </div>
          </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
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
            <button type="submit" value="Cadastrar" class="btn btn-outline-primary">Salvar</button>


<?php include("rodape.php")?>


           
