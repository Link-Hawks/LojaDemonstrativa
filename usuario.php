<?php
session_start();

function usuario_esta_logado(){
    return isset($_SESSION["usuario_logado"]);
}

function red_usuario_nao_logado(){
    if(!usuario_esta_logado()){
        header("Location: index.php?falhaDeSeguranca=1");
        die();
    }
}

function loga_usuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function usuario_logado(){
    if(usuario_esta_logado()){
        return $_SESSION["usuario_logado"];
    }
}

function logout(){
    session_destroy();
}