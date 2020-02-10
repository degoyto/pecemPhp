<?php 
    include("db.php");
    // total de itens por pagina
    $itens_por_pagina = 10;

    // pagina atual
    $pagina = intval($_GET['pagina']);
    mysqli_set_charset($connect,"utf8");
    $resultado_p = mysqli_query($connect, "SELECT * FROM Noticia LIMIT $pagina, $itens_por_pagina");
    $exibe_resultado = mysqli_fetch_assoc($resultado_p);
    $num_rows = mysqli_num_rows($resultado_p);
    print_r ($exibe_resultado["title"]);
    // $execute = $mysqli->query($sql_code) or die($mysqli->error);
    // $noticia = $execute->fetch_assoc();
    // $num = $execute->num_rows;
    
    


?>