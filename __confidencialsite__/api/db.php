<?php
    $connect = mysqli_connect("noticiaspecem.mysql.uhserver.com", "jppecem", "GIGANTE1@ff1") OR DIE ("Falha ao conectar");
    $db = mysqli_select_db($connect, "noticiaspecem") OR DIE("Não selecionou o db");
   
?>