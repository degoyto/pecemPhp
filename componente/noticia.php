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
        <p class="tipo"><?php echo $exibe['tipo']; ?></p>
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
    .noticia{
        width:100%;
        margin-top:100px;
    }
    .tipo{
        text-transform:uppercase;
        color:#009999;
        margin-bottom:-5px;
    }
    .titulo{
        font-size:50px;
        margin-bottom:20px;
    }
    .resumo{
        color:gray;
        font-size:20px;
        margin-bottom:40px;
    }
    .autor{
        color:gray;
        font-size:15px;
        margin-bottom:-5px;
    }
    
    .data{
        color:gray;
        font-size:15px;
        margin-bottom:40px;
        
    }
    .imagem{
        width:100%;
    }
    .legenda{
        font-size:12px;
        background-color:#C3DFE0;
        margin-bottom:60px;
    }
    .conteudo{
        font-size:20px;
        margin-bottom:50px;
    }

    @media screen and (min-width: 992px){
        .noticia{
            width:65%;
            
        }
    }

    @media screen and (min-width: 1200px){


    }


</style>