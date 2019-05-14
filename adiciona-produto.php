<?php require_once("View/cabecalho.php");
require_once("conexao-usuario.php"); 
require_once("DAO/ProdutoDAO.php");
red_usuario_nao_logado($logado);
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
try {
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->adicionar($nome, $preco, $descricao);
?>
        <p class="text-success">Produto <?= $nome ?><?= ','.$preco?> adicionado com sucesso!</p>
<?php } catch(Exception $exc) {?>
        <p class="text-danger">Não foi possivel adicionar o produto: <?=$exc?></p>
<?php } ?>


<?php require_once("View/rodape.php") ?>