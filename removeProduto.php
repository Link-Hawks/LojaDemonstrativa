<?php 
    include("bancoUtil.php");
    $id = $_POST['id'];
    removerProduto(conectarBanco(),$id);
    header("Location: mostra-produtos.php");
    die();