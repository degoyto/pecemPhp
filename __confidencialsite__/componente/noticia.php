<?php
    $data_inicio = strval($exibe['createdAt']);
    $original_timezone = new DateTimeZone('UTC');
    
    $datatime = new DateTime($data_inicio, $original_timezone);
    
    $novo = new DateTimeZone('America/Recife');
    $datatime->setTimeZone($novo);
    
    $output = $datatime->format("d/m/y H:i");
    
?>

<div class="container caixa">
    <div class="container noticia">
        <p class="tipo"><?php echo $listaPalavrasConvertidas[($exibe['tipo'])]; ?></p>
        <h1 class="titulo"><?php echo $exibe['title']; ?></h1>
        <p class="resumo"><?php echo $exibe['resumo']; ?> </p>
        <p class="autor">Por <?php echo $exibe['autor']; ?> </p>
        <p class="data"><?php echo $output;  ?> </p>
        <img class="imagem" src="<?php echo $exibe['fotoUrl']; ?>"/>
        <p class="legenda"><?php echo $exibe['legenda']; ?> </p>
        <p class="conteudo"><?php echo $exibe['conteudo']; ?> </p>
    </div>
    
</div>


<style>
    

</style>