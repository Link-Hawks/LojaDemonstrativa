 <?php include("cabecalho.php") ?>
 <?php include("bancoUtil.php") ?>
    <table class="table">
        
        <?php 
            $produtos = buscarProduto(conectarBanco());    
            foreach($produtos as $produto) :?>
                <tr>
                    <td><?=$produto?></td>
                    <td><?=$produto?></td>
                </tr>
        <?php endforeach ?>
    </table>
 <?php include("rodape.php") ?>