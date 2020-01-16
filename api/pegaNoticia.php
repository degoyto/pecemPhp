<?php 

    include("db.php");
    include("config.php");
    // $url = explode('/', $_SERVER['SCRIPT_URI']);
    $url = explode('/', $_GET['url']);
    $id = $url[1];
    mysqli_set_charset($connect,"utf8");
    $result = mysqli_query($connect, "SELECT * FROM Noticia WHERE id=$id");
    $exibe = mysqli_fetch_assoc($result);
   
?>