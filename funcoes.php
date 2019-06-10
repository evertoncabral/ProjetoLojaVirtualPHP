<?php

function logarUsuario($nome, $nivelDeAcesso){
    $usuario = ["logado"=>true,"nome"=>$nome,"nivelAcesso"=>$nivelDeAcesso];
    return $usuario;
}

function addProduto($nome,$descricao,$preco,$imagem){
    $jsonProdutos = file_get_contents("Produtos.json");
    $produtos = json_decode($jsonProdutos,true);
    //$produtos=$produtos["Produtos"];

    $chave = count($produtos["Produtos"])+1;
    $novoProduto = ["id"=>"produto$chave","nome"=>$nome, "descricao"=>$descricao, "preco"=>$preco,"img"=>$imagem];
    $produtos["Produtos"][]=$novoProduto;
    $jsonProdutos =json_encode($produtos);

    file_put_contents("Produtos.json",$jsonProdutos);
    return true;
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




function addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelDeAcesso){
    $jsonUsuarios = file_exists("Usuarios.json")?file_get_contents("Usuarios.json"):"";
    $Usuarios = json_decode($jsonUsuarios,true);
    //$produtos=$produtos["Produtos"];
    $itensUsuarios=is_array($Usuarios["Usuarios"])?count($Usuarios["Usuarios"]):0;
    $chave = $itensUsuarios+1;
    $novoUsuario = ["id"=>"usuario$chave","nome"=>$Usuarios, "email"=>$emailUsuario, "senha"=>$senhaUsuario,"nivelAcesso"=>$nivelDeAcesso];

    $Usuarios["usuario"][]=$novoUsuario;
    $jsonUsuarios =json_encode($Usuarios);

   
    return  file_put_contents("Usuarios.json",$jsonUsuarios);
}
