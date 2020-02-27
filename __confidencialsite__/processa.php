<?php 
    include("api/db.php");
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING, 'UTF-8');
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING, 'UTF-8');
    $destacar = filter_input(INPUT_POST, 'destacar', FILTER_SANITIZE_STRING, 'UTF-8');
    $linkImagem = filter_input(INPUT_POST, 'link-image', FILTER_SANITIZE_STRING, 'UTF-8');
    $legenda = filter_input(INPUT_POST, 'legenda', FILTER_SANITIZE_STRING, 'UTF-8');
    $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING, 'UTF-8');
    $conteudo = $_POST['conteudo'];
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING, 'UTF-8');

    echo $titulo."<br>";
    echo $tipo."<br>";
    echo $destacar."<br>";
    echo $linkImagem."<br>";
    echo $legenda."<br>";
    echo $resumo."<br>";
    echo $conteudo."<br>";
    echo $autor."<br>";
    mysqli_set_charset($connect,"utf8");
    $sql = "INSERT INTO Noticia (title, conteudo, resumo, fotoUrl, legenda, autor, destaque, tipo, createdAt, updatedAt) VALUES ('$titulo','$conteudo','$resumo', '$linkImagem','$legenda','$autor','$destacar', '$tipo', NOW(), NOW())";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
        header("Location: http://testejornal.tk/add");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }



   
   
    
?>
