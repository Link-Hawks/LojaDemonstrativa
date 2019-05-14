<?php 
    require_once("conexao-usuario.php"); 
    require_once("DAO/ProdutoDAO.php");
    red_usuario_nao_logado($logado);
    $id = $_POST['id'];
    $produtoDAO = new ProdutoDAO();
    $produtoDAO->remover($id);
    $_SESSION["mensagem-success"] = "Produto removido com sucesso";
    header("Location: mostra-produtos.php");
    die();