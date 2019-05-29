<?php
include"funcoes.php";
//$usuario ="";
$usuario = logarUsuario("Everton Cabral", 1);
$produtos = [
    "produto1" =>["nome"=>"Curso Fullstack","descricao"=>"O Curso ensina progamação web","preco"=>1200,"img"=>"./imagem/imagem01.jpg"],
    "produto2"=>["nome"=>"Curso mobile android","descricao"=>"o curso te ensina a programar apps","preco"=>1400,"img"=>"imagem/imagem02.png"],
    "produto3"=>["nome"=>"Curso marketing digital","descricao"=>"o curso te ensina a programar apps","preco"=>1600,"img"=>"imagem/imagem03.png"],
    "produto4"=>["nome"=>"Curso mobile IOS ","descricao"=>"o curso te ensina a programar apps","preco"=>1800,"img"=>"imagem/imagem04.jpg"],
];
$produtos= addProduto("curso de UX","Curso incrível",2000,"./imagem/produto02.png",$produtos);
$produtos= addProduto("curso de ANALYTICS","Curso incrível",2000,"./imagem/produto02.png",$produtos);
$categorias = ["Cursos","Tutoriais","Artigos","Forum","Codigos"];
?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Loja Virtual</title>
<!-- codigo bootsrap para o html-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- codigo bootsrap para o html-->
</head>