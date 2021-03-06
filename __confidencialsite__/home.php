<?php 
    include("api/principaisNoticias.php");
    include("api/novasNoticias.php");





?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title>Jornal Porto do Pecém - Página Inicial </title>
        <link type="text/css" rel="stylesheet" href="css/geral/cabecalho.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/principaisNoticias.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/principaisNoticias2.css"/>
        <link type="text/css" rel="stylesheet" href="css/anuncio.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/novasNoticias.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/maisNoticias.css"/>
        <link type="text/css" rel="stylesheet" href="css/geral/rodape.css"/>
        
        <style>
            body{
                font-family: 'Roboto', sans-serif;
            }
    
        </style>

    </head>
    
    
    <body>
        <?php include("componente/cabecalho.php")?>
        <?php include("componente/navbar.php")?>
        <?php include("componente/paginaInicial/principaisNoticias.php")?>
        <?php //include("componente/paginaInicial/anuncio.php")?>
        <?php include("componente/paginaInicial/novaNoticias.php")?>
        <?php include("componente/paginaInicial/maisNoticias.php")?>
        <?php include("componente/rodape.php")?>

    </body>
    



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>


