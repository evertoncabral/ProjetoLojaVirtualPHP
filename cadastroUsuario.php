<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php";?>

<body>
<?php include_once "header.php";?>

<main class="container">
    <section class="row">
        <div class="col-md-6">

<form action="salvarUsuario.php" method = "post" enctype="multipart/form-data">
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

        <div class="form-group">
            <label for="nivelAcesso"> Nivel de Acesso</label>
            <select name="nivelUsuario" id="idUsuario" class ="form-control">
                <option selected disable> selecione o nível! </option>
                <option value="0"> Administrador</option>
                <option value="1"> Usuario</option>
            </select>
        </div>

        <button class ="btn btn-success" type="submit">Fazer Cadastro</button>


</form>
            </div>
    </section>
</main>




</body>
</html>