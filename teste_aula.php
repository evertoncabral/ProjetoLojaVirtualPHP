<?php
echo "Olá ".$_REQUEST["nome"]." ".$_REQUEST["sobrenome"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="teste_aula.php">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
        <button type="submit">Enviar</button>
    </form>


</body>
</html>