<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php";?>

<body>
<?php include_once "header.php";?>

<main class="container">
    <section class="row">
        <div class="col-md-6">

<form action="logarUsuario.php" method = "post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nomeUsuario"> Nome do Usuário</label>
            <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome do Usuário" name="nomeUsuario">
          
        </div>
        <div class="form-group">
            <label for="emailUsuario"> Email do Usuário</label>
            <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="Email do Usuário" name="emailUsuario">
        </div>

        <div class="form-group">
            <label for="senhaUsuario"> Senha do Usuário</label>
            <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" placeholder="Senha do Usuário"></textarea>
        </div>

       

        <button class ="btn btn-success" type="submit">Logar</button>
        <p>Ou</p>
        <a class ="btn btn-primary" href="cadastroUsuario.php">Criar cadastro!!</a>

</form>
            </div>
    </section>
</main>
