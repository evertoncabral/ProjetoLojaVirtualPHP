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

