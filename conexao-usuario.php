<?php
require_once("usuario.php");
$logado = usuario_esta_logado();
$conectou = isset($_GET["login"]) && $_GET["login"] == true;
$conectouComSucesso = $conectou || $logado;
$falhaAoConectar = isset($_GET["login"]) && $_GET["login"] == false;
$falhaDeSeguranca = isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true;
$deslogou = isset($_GET["Logout"]) && $_GET["Logout"] == true;