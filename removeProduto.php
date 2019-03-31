<?php 
    include("bancoProduto.php");
    require_once("conexao-usuario.php"); 
    red_usuario_nao_logado($logado);
    $id = $_POST['id'];
    removerProduto($conexao,$id);
    header("Location: mostra-produtos.php?removido=true");
    die();