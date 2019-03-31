<?php include("cabecalho.php");
include("bancoProduto.php");
require_once("conexao-usuario.php"); 
red_usuario_nao_logado($logado);
?>
    <?php
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        try {
            alteraProduto($conexao, $id, $nome, $preco,$descricao);
    ?>
    <p class="text-success">Produto <?= $nome ?><?= ", {$preco}"?> alterado com sucesso!</p>
    <?php } catch(Exception $exc) {?>
        <p class="text-danger">Não foi possivel alterar o produto: <?=$exc?></p>
    <?php } ?>
<?php include("rodape.php") ?>