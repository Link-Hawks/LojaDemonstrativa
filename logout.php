<?php
require_once("usuario.php");
logout();
$_SESSION["mensagem-success"] = "Usuario deslogado com sucesso";
header("Location: index.php");
die();