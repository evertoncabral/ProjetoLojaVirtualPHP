<?php

include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
        $item == ''?$contadorInputVazio++:0;
}

$itensPost=is_array($_POST)?count($_POST):0;
if ($contadorInputVazio == $itensPost){
    echo'<h1>Você não enviou nenhuma informação sobre o usuário</h1>';
    echo' <a clas="btn btn-primary" href="cadastroUsuario.php">Voltar para a página de cadastro de usuario</a>'; 
    exit;
}

$nomeusuario = $_POST["nomeUsuario"];
$emailUsuario= $_POST["emailUsuario"];
$senhaUsuario= password_hash($_POST["senhaUsuario"],PASSWORD_DEFAULT);
$nivelUsuario= $_POST["nivelUsuario"];


if(addUsuario($nomeusuario,$emailUsuario,$senhaUsuario,$nivelUsuario)){
    echo'<h1>Usuário cadastrado com sucesso!</h1>';
    echo' <a clas="btn btn-primary" href="login.php">Ir para a página de Login</a>';
}else{
    echo'<h1>Erro na hora de salvar ! Tente outra vez!! </h1>';
    echo' <a clas="btn btn-primary" href="cadastroUsuario.php">Voltar para a página de cadastro de usuario!</a>';
}