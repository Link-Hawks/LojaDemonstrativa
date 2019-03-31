<?php require_once("cabecalho.php");
require_once("bancoProduto.php");
require_once("conexao-usuario.php"); 
red_usuario_nao_logado($logado);
?>
    <?php
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        try {
            adicionarProduto($conexao, $nome, $preco, $descricao);
    ?>
    <p class="text-success">Produto <?= $nome ?><?= ','.$preco?> adicionado com sucesso!</p>
        <?php } catch(Exception $exc) {?>
            <p class="text-danger">Não foi possivel adicionar o produto: <?=$exc?></p>
        <?php } ?>
<?php require_once("rodape.php") ?>