<?php

function validarCompra($dadosCompras){
    $erros = [];
        if(!$dadosCompras){
            $erros[] = "Não foi recebido nenhum dado para realizar a compra!!";
        }
        if(!validarNome($dadosCompras["nomeCliente"])){
            $erros[]="verifique se o seu nome está correto e se é maior do que 2 caracteres..!!";
        }
        if(!validarCPF($dadosCompras["cpfCliente"])){
            $erros[]="CPF inválido..!! Tenta de novo!!";
        }
        if(!validarCartao($dadosCompras["cartaoCliente"])){
            $erros[]="número de cartão inválido..!! Tenta de novo!!";
        }
        if(!validarDataValidade($dadosCompras["dataValidadeCartao"])){
            $erros[]="data validade  de cartão inválido..!! Tenta de novo!!";
        }
        if(!validarCVV($dadosCompras["cvvCartao"])){
            $erros[]="número de CVV inválido..!! Tenta de novo!!";
        }
        return $erros;
}



?>

<!DOCTYPE html>
<html>
<html lang="en">
<?php include"head.php";?>
<body>

<?php include"header.php";?>

<main class="container">
    <section class="row">
    
    <?php
    $errosValidacao = validarCompra($_POST);
    if(count($errosValidacao)>0): ?>
    <div class="col-md-12">
    <ul>
            <?php foreach($errosValidacao as $erro): ?>
                    <li><?php echo $erro; ?></li>
            <?php endforeach;?>
    </ul>
    
    </div>
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                 Olá <?php echo $_POST['nomeCliente'];?> parabéns pela sua compra do produto <?php echo $_POST['nomeProduto'];?>
            </div>
        </div>
    <?php endif;?>
            <div class="col-md-12">
                <a href="iindex.php" class="btn btn-primary">Voltar para Home!!</a>
            </div>
    </section>
</main>


    
</body>
</html>

