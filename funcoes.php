<?php

function logarUsuario($nome, $nivelDeAcesso){
    $usuario = ["logado"=>true,"nome"=>$nome,"nivelAcesso"=>$nivelDeAcesso];
    return $usuario;
}

function addProduto($nome,$descricao,$preco,$imagem,$produtos){
    $novoProduto = ["nome"=>$nome, "descricao"=>$descricao, "preco"=>$preco,"imagem"=>$imagem];
    $chave = count($produtos)+1;
    $produtos["produto$chave"]=$novoProduto;
    return $produtos;
}

function validarNome($nome){
    return $nome!= "" && strlen($nome)>=3;
}

function validarCPF($cpf){
    return is_integer($cpf) && count($cpf)==11;
}

function validarCartao($nrnCartao){
    return is_integer($nrnCartao) && count($nrnCartao)==16;
}

function validarDataValidade($dataValidade){
    return $dataValidade>date("y-m-d");
}

function validarCVV($cvv){
    return  strlen($cvv)==3;
}


