let _todosProdutos = []

class ProdutoController{
    static get todos(){
        return _todosProdutos;
    }

    static set todos(listaProdutos){
        _todosProdutos = listaProdutos;
    }
    
}