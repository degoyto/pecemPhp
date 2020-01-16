<?php 

include("api/pegaNoticia.php");
include("api/noticiasAleatorias.php");




?>
<!DOCTYPE html>
<html>
    
    <body>
        <?php include("componente/head.php")?>
        <?php include("componente/cabecalho.php")?>
        <?php include("componente/navbar.php")?>
        <?php include("componente/noticia.php")?>
        <?php include("componente/outrasNoticias.php")?>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your share button code -->
        <div class="fb-share-button" 
            data-href="<?php echo $_SERVER['SCRIPT_URI'] ?>" 
            data-layout="button_count">
        </div>
        <a href="<?php $_GET['url']. '/' ?>">vai</a>
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
    
    </style>
    
</html>


