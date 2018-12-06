<?php include("cabecalho.php") ?>

<table class="table table-bordered table-dark">
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
            <td><input type='submit' class='btn btn-primary'value='Enviar'></td>
        </tr>
    </form>
</table>
<?php include("rodape.php") ?>