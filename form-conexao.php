<?php require_once("conexao-usuario.php");
require_once("usuario.php"); ?>

<?php require_once("mensagens.php") ?>

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