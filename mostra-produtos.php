 <?php include("cabecalho.php");
 include("bancoUtil.php");

 $removido = isset($_GET['removido'])?"":"style='display:none'";
 ?>
    
    <h2> Lista de Produtos </h2>    
    <p class="alert-success" <?=$removido?> >Produto removido com sucesso</p>
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

                $produtos = isset($_GET['busca'])?buscarProduto(conectarBanco(), $_GET['busca']):listarProduto(conectarBanco());    
                foreach($produtos as $produto) :?>
                    <tr>
                        <td><?=$produto["nome"]?></td>
                        <td><?=$produto["preco"]?></td>
                        <td align="center">
                            <form action="produto-formulario.php" method="post">
                                <input type="hidden" name="id" value="<?=$produto["id"]?>">
                                <input type="hidden" name="nome" value="<?=$produto["nome"]?>">
                                <input type="hidden" name="preco" value="<?=$produto["preco"]?>">
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