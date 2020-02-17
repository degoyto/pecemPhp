<?php 
    include("api/db.php");
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $destacar = filter_input(INPUT_POST, 'destacar', FILTER_SANITIZE_STRING);
    $linkImagem = filter_input(INPUT_POST, 'link-image', FILTER_SANITIZE_STRING);
    $legenda = filter_input(INPUT_POST, 'legenda', FILTER_SANITIZE_STRING);
    $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
    $conteudo = $_POST['conteudo'];
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);

    echo $titulo."<br>";
    echo $tipo."<br>";
    echo $destacar."<br>";
    echo $linkImagem."<br>";
    echo $legenda."<br>";
    echo $resumo."<br>";
    echo $conteudo."<br>";
    echo $autor."<br>";

    $sql = "INSERT INTO Noticia (title, conteudo, resumo, fotoUrl, legenda, autor, destaque, tipo, createdAt, updatedAt) VALUES ('$titulo','$conteudo','$resumo', '$linkImagem','$legenda','$autor','$destacar', '$tipo', NOW(), NOW())";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }



   
   
    
?>
