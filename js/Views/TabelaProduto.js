class TabelaProduto{
    limpa(){
        $(".table-responsive tbody tr").remove();
    }

    mostra(){
        $(".table-responsive tbody tr").show();
    }

    adicionaProdutos(produtos){
        console.log(produtos);
        produtos.forEach((produto)=>{
            this._montaTR(produto);
        })
    }

    _montaTR(produto){
        let linha = $("<tr>");
        let tabela = $(".table-responsive tbody");
        let colunas = this._montaTD(produto);
        linha.append(colunas);
        tabela.append(linha);
    }

    _montaTD(produto){
        let btn_alterar = this._gerarAlterar(produto).html();
        console.log(btn_alterar);
        let btn_remover = this._gerarRemover(produto).html();
        return $(`
            <td>${produto.nome}</td>
            <td>${produto.preco}</td>
            <td>${produto.descricao}</td>
            <td align="center">${btn_alterar}</td>
            <td align="center">${btn_remover}</td>
        `)
    }

    _gerarAlterar(produto){
        return $(`
        <span>
            <form action="produto-formulario.php" method="post">
                <input type="hidden" name="id" value="${produto.id}">
                <input type="hidden" name="nome" value="${produto.nome}">
                <input type="hidden" name="preco" value="${produto.preco}">
                <input type="hidden" name="descricao" value="${produto.descricao}">
                <button class="btn btn-warning">Alterar</button>
            </form>
        </span>
        `);
    }

    _gerarRemover(produto){
       return $(`
       <span>
            <form action="removeProduto.php" method="post">
                <input type="hidden" name="id" value="${produto.id}">

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#produto${produto.id}">
                    Remover
                </button>

                <!-- Modal -->
                <div class="modal fade" id="produto${produto.id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Remover Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Deseja realmente remover ${produto.nome.toLowerCase()}?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Confirmar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
        </span>
        `);
    }
}