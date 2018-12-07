<?php
    function conectarBanco(){
        return mysqli_connect('localhost','root','','loja');
    }

    function adicionarProduto($conexao, $nome, $preco, $descricao){
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
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscarProduto($conexao, $busca){
        $query = "select * from produtos where nome like '{$busca}%'";
        $resultado = mysqli_query($conexao, $query);
        $arrayProdutos = array();        
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($arrayProdutos,$produto);
        }
        return $arrayProdutos;
    }

    function alteraProduto($conexao, $id, $nome, $preco,$descricao){
        $query = "update produtos set nome='{$nome}', preco='{$preco}', descricao='{$descricao}' where id={$id}";
        if($nome != '' && $preco != '')
            return mysqli_query($conexao,$query);
        else 
            throw new Exception('Nome nem produtos podem ser em branco');
    }