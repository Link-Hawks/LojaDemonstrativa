class TabelaController{
    constructor(tabela, produtosIniciais){
        this._tabela = tabela;
        this._produtosIniciais = produtosIniciais;
        this._preencherTabela(this._produtosIniciais);
    }

    _preencherTabela(produtos){
        this._tabela.limpa();
        this._tabela.montaPor(produtos);
    }

    
    filtrarProduto(){
        let produtoDigitado = $("#busca").val();
        let qntLetras = produtoDigitado.length;

        switch(qntLetras){
            case 0: 
                this._preencherTabela(ProdutoController.todos);
            break;
            case 3:
                this._buscarEPreencherTabela(produtoDigitado);
            break;
            case 1: case 2: default:
                this._filtrar(produtoDigitado);
            break;
        }
    }

    _filtrar(produtoDigitado){
        const produtos =  ProdutoController.todos;
        if(!!produtos){
            const produtosFiltrados = produtos.filter( produtoLista => {
                let prodNomeMinusculo = produtoLista.nome.toLowerCase();
                return prodNomeMinusculo.includes(produtoDigitado.toLowerCase()) 

            });
            this._preencherTabela(produtosFiltrados);
        }
    }

    _buscarEPreencherTabela(produtoDigitado){
        ProdutoService.buscar(produtoDigitado)
        .then( produtos => 
              this._preencherTabela(produtos)
        )
    }

}   