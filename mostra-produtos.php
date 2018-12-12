 <?php include("cabecalho.php");
 include("bancoUtil.php");

 $removido = isset($_GET['removido'])?"":"style='display:none'";
 ?>
    
    <h1> Lista de Produtos </h1>    
    <p class="alert-success" <?=$removido?> >Produto removido com sucesso</p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Descrição</th>
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
                            <td><?=substr(utf8_encode($produto["descricao"]),0,35)?><?=strlen($produto["descricao"])>=35?"...":''?>
                            </td>
                            <td align="center">
                                <form action="produto-formulario.php" method="post">
                                    <input type="hidden" name="id" value="<?=$produto["id"]?>">
                                    <input type="hidden" name="nome" value="<?=$produto["nome"]?>">
                                    <input type="hidden" name="preco" value="<?=$produto["preco"]?>">
                                    <input type="hidden" name="descricao" value="<?=utf8_encode($produto["descricao"])?>">
                                    <button class="btn btn-warning">Alterar</button>
                                </form>
                            </td>
                            <td align="center">

                                <form action="removeProduto.php" method="post">
                                    <input type="hidden" name="id" value="<?=$produto["id"]?>">

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?=$produto["id"]?>">
                                     Remover
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter<?=$produto["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Remover Produto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Deseja realmente remover <?=strtolower($produto["nome"])?>?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Confirmar</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </form>

                            </td>
                        </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
 <?php include("rodape.php") ?>