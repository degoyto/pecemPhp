<?php 
    include("db.php");
    // total de itens por pagina
    $itens_por_pagina = 10;
    mysqli_set_charset($connect,"utf8");
    // pagina atual
    if ($URL[1] === 0){
        $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia limit $itens_por_pagina");
    }
    if ($URL[1] === 15){
        $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia  where tipo = 10 or tipo = 11 limit $itens_por_pagina");
    }
    else {
        $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia  where tipo = $URL[1] limit $itens_por_pagina");
    }
    
    
    
    
    
    
?>