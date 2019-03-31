<?php
    require_once("conecta.php");
    require_once("bancoUsuario.php");
    require_once("usuario.php");

    $usuario = buscaUsuario($conexao,$_POST["email"], $_POST["senha"]);
    
    if($usuario){
        header("Location: index.php?login=1");
        loga_usuario($_POST["email"]);
    }else{
        header("Location: index.php?login=0");
    }
    die();
?>