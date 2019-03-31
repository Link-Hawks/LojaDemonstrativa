<?php
require_once("conecta.php");
require_once("bancoProduto.php");

$produtos = $_GET["produtos"];
$arrProdutos = buscarProduto($conexao,$produtos);
echo json_encode($arrProdutos);

