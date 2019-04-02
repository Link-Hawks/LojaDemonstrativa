<?php
    require_once("conecta.php");
    require_once("bancoUsuario.php");
    require_once("usuario.php");

    $usuario = buscaUsuario($conexao,$_POST["email"], $_POST["senha"]);
    
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