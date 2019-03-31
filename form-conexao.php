<?php require_once("conexao-usuario.php");
require_once("usuario.php");

if($conectou): ?>
    <p class="alert-success"> Conectado com sucesso como <?=usuario_logado()?>.
        <a href="logout.php" class="text-danger">Deslogar</a>
    </p>
<?php endif ?>

<?php if($falhaAoConectar): ?>
    <p class="alert-danger"> Não foi possível logar </p>
<?php endif ?>

<?php if($falhaDeSeguranca): ?>
    <p class="alert-danger"> Você não tem acesso a esta funcionalidade </p>
<?php endif ?>

<?php if($deslogou): ?>
    <p class="alert-success"> Deslogado com sucesso. </p>
<?php endif ?>

<?php if (!usuario_esta_logado()):?>
    <h1> Login </h1>
    <form method="post" action="login.php">
        <table class="table">
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" class="btn btn-dark">Login</button></td>
        </tr>
        </table>
    </form>
<?php endif ?>