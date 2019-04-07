<?php
function listaOrdemServico($conexao){
    $servicos = array();
    $resultado = mysqli_query($conexao, "select * from ordem_de_servico");
    while ($servico = mysqli_fetch_assoc($resultado)) {
        array_push($servicos, $servico);
    }
    return $servicos;
}

function cadastroOrdemServico($conexao, $paciente, $medico) {
              $query = "insert into ordem_de_servico (paciente, medico) values('{$paciente}', '{$medico}')";
              return mysqli_query($conexao, $query);
            }
function removeOrdemServico($conexao, $id) {
    $query = "delete from ordem_de_servico where id = {$id}";
    return mysqli_query($conexao, $query);
}