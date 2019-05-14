<?php
require_once("DAO/ProdutoDAO.php");

$produtos = $_GET["produtos"];

$produtoDao = new ProdutoDAO();
$arrProdutos = $produtoDao->buscar($produtos);
echo json_encode($arrProdutos);

