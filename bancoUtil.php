<?php
    function conectarBanco(){
        return mysqli_connect('localhost','root','','loja');
    }

    function adicionarProduto($conexao, $nome, $preco){
        $query = "insert into produtos (nome,preco) values ('{$nome}','{$preco}');";
        return mysqli_query($conexao,$query);
    }

    function buscarProduto($conexao){
        $query = "select * from produtos";
        $produtos = mysqli_query($conexao,$query);
        $arrayProdutos = array();
        $produto = mysqli_fetch_assoc($produtos);
        return ;
    }