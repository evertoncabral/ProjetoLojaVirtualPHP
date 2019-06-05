<?php
file_put_contents("texto.txt","Teste rápido da aula em 1...2....3....!!");

$arquivo= file_get_contents("texto.txt");

?>


<h1><?php echo $arquivo; ?></h1>



