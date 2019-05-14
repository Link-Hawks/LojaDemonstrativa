<?php
class SingletonProduto{

    private static $conexao = false;

    public static function getConexao(){
        if(!SingletonProduto::$conexao){
            SingletonProduto::$conexao = new PDO('mysql:host=localhost;dbname=loja','root','');
        }
        return SingletonProduto::$conexao;
    } 

}