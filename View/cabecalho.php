<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hawks Shop</title>
        <link rel="icon" href="img/icon.png" type="image/png" sizes="64x52">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
        <script src="js/app/lib/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="js/app/lib/bootstrap.min.js"></script>
        
        <link href="css/loja.css" rel="stylesheet">

    </head>
    <body>
    
    <?php require_once("View/menu.php")?>
        
    <div class="container">
        <div class="principal">        
            <?php require_once("conexao-usuario.php"); 
            red_usuario_nao_logado($logado);?>
           
            