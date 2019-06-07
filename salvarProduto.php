<?php

include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
        $item == ''?$contadorInputVazio++:0;
}



if ($contadorInputVazio == count($_POST)){
    
    echo'<h1>Você não enviou nenhuma informação sobre o produto</h1>';
    echo' <a clas="btn btn-primary" href="cadastroProduto.php">Voltar para a página de cadastro de produtos</a>'; 


    exit;

}


$imgAceita=["imagem/png","image/jpeg","image/jpeg"];
$errorEnvio=$_FILES["arquivo"]["error"];


$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"];
$descProduto = $_POST["descProduto"];
$nomeArquivo =$_FILES["arquivo"]["name"];
$arquivoTmp=$_FILES["arquivo"]["tmp_name"];
$caminhoImg="imagem/$nomeArquivo";
$typeFile = $_FILES["arquivo"]["type"];


if ($errorEnvio !==0){
    
    echo'<h1>Houve um erro no envio do arquivo , verifique e tente novamente!</h1>';
    echo' <a clas="btn btn-primary" href="cadastroProduto.php">Voltar para a página de cadastro de produtos</a>'; 


    exit;

}

if(array_search($typeFile,$imgAceita) == false ){
    echo'<h1>Extensão do arquivo inválida. Verifique se o arquivo é uma imagem do tipo .png ou.jpeg ou .jpg!</h1>';
    echo' <a clas="btn btn-primary" href="cadastroProduto.php">Voltar para a página de cadastro de produtos</a>';
    
    exit;
}


move_uploaded_file($arquivoTmp,"imagem/$nomeArquivo");

addProduto($nomeProduto,$descProduto,$precoProduto,$caminhoImg);

?>
