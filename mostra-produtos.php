 <?php include("cabecalho.php") ?>
 <?php include("bancoUtil.php") ?>
    
    <h2> Lista de Produtos </h2>
    <?php if (isset($_POST["deletado"]) && $_POST["deletado"] == true) : ?>    
        <p class="alert-success">Produto removido com sucesso</p>
    <?php endif ?>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $produtos = buscarProduto(conectarBanco());    
                foreach($produtos as $produto) :?>
                    <tr>
                        <td><?=$produto["nome"]?></td>
                        <td><?=$produto["preco"]?></td>
                        <td align="center">
                            <form action="alteraProduto.php" method="post">
                                <button class="btn btn-warning">Alterar</button>
                            </form>
                        </td>
                        <td align="center">
                            <form action="removeProduto.php" method="post">
                                <input type="hidden" name="id" value="<?=$produto["id"]?>">
                                <button class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>
 <?php include("rodape.php") ?>