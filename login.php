<?php
    require_once("bancoUsuario.php");
    require_once("usuario.php");
    require_once("DAO/SingletonProduto.php");

    $usuario = buscaUsuario(SingletonProduto::getConexao(),$_POST["email"], $_POST["senha"]);
    
    if($usuario){
        $_SESSION["mensagem-success"]="Usuario logado com sucesso!";
        loga_usuario($_POST["email"]);
        header("Location: index.php");
    }else{
        $_SESSION["mensagem-danger"]="Erro ao logar!";
        header("Location: index.php");
    }
    die();
?>