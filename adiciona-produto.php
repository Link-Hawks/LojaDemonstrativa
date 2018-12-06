<?php include("cabecalho.php");
include("bancoUtil.php");
?>
<html>
    <?php
        $nome = isset($_POST['nome'])?$_POST['nome']:'';
        $preco = isset($_POST['preco'])?$_POST['preco']:'';
        $conexao = conectarBanco();

        if(adicionarProduto($conexao, $nome, $preco)) :
    ?>
            <p class="text-success">Produto <?= $nome ?><?= ','.$preco?> adicionado com sucesso!</p>
    <?php else :?>
            <p class="text-danger">Produto <?= $nome ?><?= ','.$preco?> Não foi possivel de ser adicionado :(</p>
    <?php endif ?>
</html>
<?php include("rodape.php") ?>