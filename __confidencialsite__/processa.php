<?php 
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    echo $titulo;
    
?>
