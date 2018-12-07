<?php include("cabecalho.php");
include("bancoUtil.php");
?>
    <?php
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        try {
            alteraProduto(conectarBanco(), $id, $nome, $preco,$descricao);
    ?>
    <p class="text-success">Produto <?= $nome ?><?= ", {$preco}"?> alterado com sucesso!</p>
    <?php } catch(Exception $exc) {?>
        <p class="text-danger">Não foi possivel alterar o produto: <?=$exc?></p>
    <?php } ?>
<?php include("rodape.php") ?>