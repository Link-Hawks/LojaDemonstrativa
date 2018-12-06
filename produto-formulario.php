<?php include("cabecalho.php") ?>

<h1>Adicionar Produto</h1>

<table class="table table-bordered table-light">
    <form action='adiciona-produto.php' method='post'>
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type='text' name='nome'><br/></td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td><input class="form-control" type='number' name='preco'><br/></td>
        </tr>
        <tr>
            <td colspan="2" align="center" ><input type='submit' class='btn btn-dark'value='Enviar'></td>
        </tr>
    </form>
</table>
<?php include("rodape.php") ?>