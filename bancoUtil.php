<?php
    function conectarBanco(){
        return mysqli_connect('localhost','root','','loja');
    }

    function adicionarProduto($conexao, $nome, $preco){
        $query = "insert into produtos (nome,preco) values ('{$nome}','{$preco}');";
        if($nome != '' && $preco != '')
            return mysqli_query($conexao,$query);
        else 
            throw new Exception('Nome nem produtos podem ser em branco');
    }

    function buscarProduto($conexao){
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