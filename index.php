<?php require_once("cabecalho.php");
require_once("logica-usuario.php");?>


<h1 class="text-center">Bem vindo!</h1>
</div>

<?php if(isset($_SESSION["success"])) { ?>
    <p class="alert-success text-center"><?= $_SESSION["success"] ?></p>
<?php
    unset($_SESSION["success"]);
} ?>

<?php if(isset($_SESSION["danger"])) { ?>
    <p class="alert-danger text-center"><?= $_SESSION["danger"] ?></p>
<?php
    unset($_SESSION["danger"]);
} ?>


<?php if(usuarioEstaLogado()) { ?>
    <p class="text-success text-center">Você está logado como: 
    <?=usuarioLogado()?>. <a href="logout.php">Deslogar</a></p>
 <?php } else {?>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email:</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button  class="btn btn-outline-primary">Login</button></td>
            </tr>
        </table>
    </form>
<?php } ?>

<?php include("rodape.php");?>