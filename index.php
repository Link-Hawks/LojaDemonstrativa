<html>
    <head>
        <meta charset="utf-8">
        <title>Hawks Shop</title>
        <link rel="icon" href="img/icon.png" type="image/png" sizes="64x52">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/loja.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <?php require_once("View/menu.php");
    require_once("conexao-usuario.php")?>

    <?php if ($conectouComSucesso): ?>
   
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner"style="width:100vw;height:70vh">
          <div class="carousel-item active" >
            <img class="d-block w-100" src="img/chicago.jpg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/la.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/ny.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>  
      
      <p class="alert-success" style="text-align:center"> Conectado com sucesso como <?=usuario_logado()?>.
        <a href="logout.php" class="text-danger" >Deslogar</a>
      </p>
    <?php endif ?>
  
    <div class="container">
      <div class="principal">
        <?php require_once("form-conexao.php"); ?>
    
<?php include("rodape.php") ?>