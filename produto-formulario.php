<?php include("cabecalho.php");
$produtoId = isset($_POST['id'])?$_POST['id']:'';
$produtoPreco = isset($_POST['preco'])?$_POST['preco']:'';
$produtoNome = isset($_POST['nome'])?$_POST['nome']:'';
$produtoDescricao = isset($_POST['descricao'])?$_POST['descricao']:'';

$vaiAlterar = isset($_POST['nome']) && isset($_POST['preco']);
?>
<?= $vaiAlterar?'<h1>Alterar Produto</h1>':'<h1>Adicionar Produto</h1>'?>

<table class="table table-bordered table-light">
    <form action="<?=$vaiAlterar? 'altera-produto.php': 'adiciona-produto.php'?>" method='post'>
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type='text' name='nome' value="<?=$produtoNome?>"><br/></td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td><input class="form-control" type='number' name='preco' step='0.5' value="<?=$produtoPreco?>"><br/></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><textarea class="form-control" name='descricao' ><?=$produtoDescricao?></textarea><br/></td>
        </tr>
        <input type="hidden" name='id' value="<?=$produtoId?>">
        <tr>
            <td colspan="2" align="center" ><input type='submit' class='btn btn-dark'value='Enviar'></td>
        </tr>
    </form>
</table>
<?php include("rodape.php") ?>