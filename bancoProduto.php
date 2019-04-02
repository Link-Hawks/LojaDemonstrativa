<?php
    include("conecta.php");    
    
    function adicionarProduto($conexao, $nome, $preco, $descricao){
        $nome = mysqli_real_escape_string($conexao,$nome);
        $nome = mysqli_real_escape_string($conexao,$preco);
        $nome = mysqli_real_escape_string($conexao,$descricao);
        $query = "insert into produtos (nome,preco,descricao) values ('{$nome}','{$preco}','{$descricao}');";
        if($nome != '' && $preco != '')
            return mysqli_query($conexao,$query);
        else 
            throw new Exception('Nome nem produtos podem ser em branco');
    }

    function listarProduto($conexao){
        
        $query = "select * from produtos";
        $resultado = mysqli_query($conexao,$query);
        $arrayProdutos = array();        
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($arrayProdutos,$produto);
        }
        return $arrayProdutos;
    }

    function removerProduto($conexao,$id){
        $id = mysqli_real_escape_string($conexao,$id);
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscarProduto($conexao, $busca){
        $busca = mysqli_real_escape_string($conexao,$busca);
        $query = "select * from produtos where nome like '%{$busca}%'";
        $resultado = mysqli_query($conexao, $query);
        $arrayProdutos = array();        
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($arrayProdutos,$produto);
        }
        return $arrayProdutos;
    }

    function alteraProduto($conexao, $id, $nome, $preco,$descricao){
        $id = mysqli_real_escape_string($conexao, $id);
        $nome = mysqli_real_escape_string($conexao, $nome);
        $preco = mysqli_real_escape_string($conexao, $preco);
        $descricao = mysqli_real_escape_string($conexao, $descricao);
        $query = "update produtos set nome='{$nome}', preco='{$preco}', descricao='{$descricao}' where id={$id}";
        if($nome != '' && $preco != '')
            return mysqli_query($conexao,$query);
        else 
            throw new Exception('Nome nem produtos podem ser em branco');
    }