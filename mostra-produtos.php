 <?php include("View/cabecalho.php");

 $removido = isset($_GET['removido'])?"":"style='display:none'";
 ?>
    
    <h1> Lista de Produtos </h1>    
    <p class="alert-success" <?=$removido?>>Produto removido com sucesso</p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id='tabelaProdutos' >
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="1">
                        Nome                        
                        <a href="#"><i class="fas fa-sort ordena" id="ordenar-nome" ></i></a>
                    </th>
                    <th scope="col" colspan="1">
                        Preço                        
                        <a href="#"><i class="fas fa-sort ordena" id="ordenar-preco" ></i></a>
                    </th>
                    <th scope="col" colspan="1">
                        Descrição                        
                    </th>
                    <th colspan="2" style="min-whidth:40%"></th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <script src="js/app/lib/jquery-1.11.3.min.js"></script>
    <script src="js/app/Views/TabelaProduto.js"></script>
    <script src="js/app/Controllers/TabelaController.js"></script>
    <script src="js/app/Controllers/ProdutoController.js"></script>
    <script src="js/app/Services/ProdutoService.js"></script> 
       
    <script>
      produtosIniciais = ProdutoService.buscarIniciais()
      let tabela = new TabelaProduto();
      produtosIniciais.then((produtos)=>{
        let tController = new TabelaController(tabela,produtos);
        ProdutoController.todos = produtos;
        $("#busca").on('input', tController.filtrarProduto.bind(tController))
      })
      

    </script>
<?php include("rodape.php");?>