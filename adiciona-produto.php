<?php include("cabecalho.php");
include("bancoUtil.php");
?>
    <?php
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        try {
            adicionarProduto(conectarBanco(), $nome, $preco);
    ?>
    <p class="text-success">Produto <?= $nome ?><?= ','.$preco?> adicionado com sucesso!</p>
        <?php } catch(Exception $exc) {?>
            <p class="text-danger">Não foi possivel adicionar o produto: <?=$exc?></p>
        <?php } ?>
<?php include("rodape.php") ?>