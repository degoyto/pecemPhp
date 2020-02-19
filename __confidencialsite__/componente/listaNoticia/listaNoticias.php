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
                                <a href='/pecemphp/noticias/".$listaPalavras[($exibe_news['tipo'])]."'>" 
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
                    
                    if ($URL[1] == 0){
                        echo "<a href='/pecemphp/noticias'> Página Inicial</a>";
                        for ($pag_ant = $pagina - $max_link; $pag_ant <=$pagina -1; $pag_ant++){
                            if ($pag_ant >= 1){
                                echo "<a href='/pecemphp/noticias?pagina=$pag_ant'>$pag_ant</a>";

                            }
                        }

                        echo $pagina;

                        for ($pag_dps = $pagina + 1; $pag_dps <= $pagina + $max_link ; $pag_dps++){
                            if ($pag_dps <= $qnt_pag){
                                echo "<a href='/pecemphp/noticias?pagina=$pag_dps'>$pag_dps</a>";

                            }
                        }
                        echo "<a href='/pecemphp/noticias?pagina=$qnt_pag'>Última Página</a>";
                    }
                    else{
                        echo "<a href='/pecemphp/noticias/".$listaPalavras[($URL[1])]."'>Página Inicial</a>";
                        echo "<a href='/pecemphp/noticias/".$listaPalavras[($URL[1])]."?pagina=$qnt_pag'>Última Página</a>";
                    }
                    
                    
                
                
                ?>
                
                   
            </div>
        </div>
    </div>
    
    
        
        
        
        
        
        
    

    
    
</html>