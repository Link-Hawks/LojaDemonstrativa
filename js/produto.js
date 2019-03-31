class Produto{
    static buscaProdutos(){
        let digitado = $("#busca").val();
        const tabela = new TabelaProduto();
        
        if(digitado.length > 2){
            $.get("buscaProduto.php",{produtos:digitado},(produtos)=>{
                tabela.limpa();
                tabela.adicionaProdutos(produtos);
            },"json")
        }else if(digitado.length == 0){
            $.get("buscaProduto.php",{produtos:digitado},(produtos)=>{
                tabela.limpa();
                tabela.adicionaProdutos(produtos);
            },"json")
        }
    }
}