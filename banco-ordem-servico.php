<?php
require_once("conecta.php");
function listaOrdemServico($conexao){
    $servicos = array();
    $resultado = mysqli_query($conexao, "select * from ordem_de_servico");
    while ($servico = mysqli_fetch_assoc($resultado)) {
        array_push($servicos, $servico);
    }
    return $servicos;
}

function buscaMedico($conexao) {
   
    $resultado = mysqli_query($conexao, "select medico from medico");
    
    return $resultado;
}

function buscaPaciente($conexao) {
  
    $resultado = mysqli_query($conexao, "select paciente from paciente");

    return $resultado;
}
 

function cadastroOrdemServico($conexao, $paciente, $medico, $calendario, $convenio, $coleta, $observacao) {
    $query = "insert into ordem_de_servico (paciente, medico, calendario, convenio, coleta, observacao) values('{$paciente}',
    '{$medico}', '{$calendario}', '{$convenio}', '{$coleta}', '{$observacao}')";
    return mysqli_query($conexao, $query);
}

function alteraOrdemServico($conexao, $id, $paciente, $medico, $calendario, $convenio, $coleta, $observacao) {
    $query = "update ordem_de_servico set paciente = '{$paciente}', medico = '{$medico}', 
    calendario = '{$calendario}', convenio = '{$convenio}', coleta = '{$coleta}', observacao = '{$observacao}' where id = '{$id}'";
    return mysqli_query ($conexao, $query);
}

function buscaOrdemServico($conexao, $id) {
    $query = "select * from ordem_de_servico where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

/*function buscaPaciente($conexao, $id) {
    $query = "select * from paciente where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}*/



function removeOrdemServico($conexao, $id) {
    $query = "delete from ordem_de_servico where id = {$id}";
    return mysqli_query($conexao, $query);
}


/*function boolean checkifexits($conexao, $args){
    $query = "select CRM where db  crm = {$args}";

    if(mysqli_query($conexao, $query)){
        return true
    } else {
        return false;
    }
     

}

# voc vai criar uma coluna CRM por exemplo certo?*/