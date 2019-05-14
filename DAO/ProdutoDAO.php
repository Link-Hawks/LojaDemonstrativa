<?php
require_once "DAO/SingletonProduto.php";

class ProdutoDAO{

    private static $conexao;

    public function __construct($conexao = false){
        if($conexao) $this->conexao = $conexao;
        else $this->conexao = SingletonProduto::getConexao();
    }
  
    public function adicionar($nome, $preco, $descricao){
        $query = "INSERT INTO produtos (nome,preco,descricao) VALUES ('{$nome}','{$preco}','{$descricao}');";
        if($nome != '' && $preco != '')
            return $this->exec($query);
        else 
            throw new Exception('Nome nem produtos podem ser em branco');
    }

    public function listar(){
        $query = "SELECT * FROM produtos";
        $resultado = $this->query($query);
        $arrayProdutos = $resultado->fetchAll();
        return $arrayProdutos;
    }

    public function remover($id){
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return $this->exec($query);
    }

    public function buscar($busca){
        $query = "SELECT * FROM produtos WHERE nome LIKE '%{$busca}%'";
        $resultado = $this->query($query);
        $arrayProdutos = $resultado->fetchAll();      
        return $arrayProdutos;
    }

    public function alterar($id, $nome, $preco,$descricao){
        $query = "UPDATE produtos SET nome='{$nome}', preco='{$preco}', descricao='{$descricao}' WHERE id={$id}";
        if($nome != '' && $preco != '')
            return $this->exec($query);
        else 
            throw new Exception('Nome nem produtos podem ser em branco');
    }

    private function exec($query){
        return $this->conexao->exec($query);
    }

    private function query($query){
        return $this->conexao->query($query);
    }
}