<?php include("cabecalho.php") ?>
<html>
    <?php
        $nome = isset($_GET['nome'])?$_GET['nome']:'';
        $preco = $_GET['preco'];
    ?>
    <p class="text-success">Produto <?= $nome ?><?= ','.$preco?> adicionado com sucesso!</p>
</html>
<?php include("rodape.php") ?>