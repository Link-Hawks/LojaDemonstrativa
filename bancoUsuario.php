<?php 

function buscaUsuario($conexao,$email,$senha){
    $senhaMD5 = md5($senha);
    $query = "SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senhaMD5}'";
    $resultado = $conexao->query($query);
    $usuario = $resultado->fetch();
    return $usuario;
}