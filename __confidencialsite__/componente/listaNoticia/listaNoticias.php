<?php
    function converteData($data_original){
        $data_inicio = strval($data_original);
        $original_timezone = new DateTimeZone('UTC');
        
        $datatime = new DateTime($data_inicio, $original_timezone);
        
        $novo = new DateTimeZone('America/Recife');
        $datatime->setTimeZone($novo);
        
        $output = $datatime->format("d/m/y H:i");
        return $output;
    }
?>
<!DOCTYPE html>
<html>
    <div class="container lista-noticias">
        <div class="container div-noticias-anuncios">
            <div class="div-noticias"> 
                <h1 >
                    <?php 
                        echo $listaPalavrasConvertidas[($URL[1])];
                    ?>
                </h1>
                <?php 
                    while ($exibe_news = mysqli_fetch_assoc($resultado_noticia) ){
                        echo "<div class='container cada-noticia'>
                            <div class='img-lista-news'>
                                <img src='".$exibe_news['fotoUrl']."'/>
                            </div>
                            <div class='news-info'>
                                <a href='https://jornalportodopecem.com.br/#/noticias/".$exibe_news['tipo']."'>" 
                                    .$listaPalavrasConvertidas[($exibe_news['tipo'])]
                                    .
                                "</a>
                                <h1>"
                                    .$exibe_news['title'].
                                "</h1>
                                <p>"
                                    .converteData($exibe_news['createdAt']).
                                "</p> 
                            </div> 
                            
                        </div>";
                    }
                    
                
                
                ?>
                
                   
            </div>
        </div>
    </div>
    
    
        
        
        
        
        
        
    

    
    
</html>