<?php 
    include("db.php");
    // total de itens por pagina
    $itens_por_pagina = 10;

    // pagina atual
    $pagina = intval($_GET['pagina']);
    mysqli_set_charset($connect,"utf8");
    
    $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia limit $itens_por_pagina");
    
    
    
?>