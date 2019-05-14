class ProdutoService{  
    
    static buscar(nomeProduto){
        return new Promise( resolve =>{
            $.get("buscaProduto.php",{produtos:nomeProduto},(lista_produtos)=>{
                resolve(lista_produtos)
            },"json")
        })
    }

    static buscarIniciais(){
        return new Promise( resolve =>{
            $.get('buscaProduto.php',{produtos: ''}, lista_produtos => {
                resolve(lista_produtos)
            },"json")
        })
    }
}