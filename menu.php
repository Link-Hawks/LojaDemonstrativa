<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top navbar-inverse">
    <div class="container">
        <a class="navbar-brand" id="logo" href="index.php">
            <div class="img-box d-inline-block">
                <img id="img-default" width="30" height="24" src="img/brand.png" />
                <img id="img-hover"  width="30" height="24" src="img/brand-hover.png" />
            </div>
            <span>Minha loja</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostra-produtos.php">Listar Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produto-formulario.php">Cadastrar Produtos</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" method="get" action="busca.php">
                <input class="form-control mr-sm-2" name="busca" size="30" type="search" placeholder="Buscar produtos..." aria-label="Buscar">
                <button class="btn btn-outline-light my-2 my-sm-0"  type="submit">Buscar</button>
        </form>
    </div>
</nav>