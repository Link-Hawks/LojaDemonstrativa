<?php include("View/cabecalho.php");
require_once("conexao-usuario.php"); 
require_once("DAO/ProdutoDAO.php");
red_usuario_nao_logado($logado);
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$id = $_POST['id'];
$descricao = $_POST['descricao'];

try {
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->alterar($id, $nome, $preco,$descricao);
?>
        <p class="text-success">Produto <?= $nome ?><?= ", {$preco}"?> alterado com sucesso!</p>
<?php } catch(Exception $exc) {?>
        <p class="text-danger">Não foi possivel alterar o produto: <?=$exc?></p>
<?php } ?>

<?php include("rodape.php") ?>