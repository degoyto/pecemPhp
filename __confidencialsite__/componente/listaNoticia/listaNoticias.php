<?php
    function converteData($data_original){
        $data_inicio = strval($data_original);
        $original_timezone = new DateTimeZone('UTC');
        
        $datatime = new DateTime($data_inicio, $original_timezone);
        
        $novo = new DateTimeZone('America/Recife');
        $datatime->setTimeZone($novo);
        
        $output = $datatime->format("d/m/Y - H:i");
        return $output;
    }
?>
<!DOCTYPE html>
<html>
    <div class="container lista-noticias">
        <div class="container div-noticias-anuncios">
            <div class="container div-noticias"> 
                <h1 >
                    <?php 
                        echo $listaPalavrasConvertidas[($URL[1])];
                    ?>
                </h1>
                <hr class='linhas-lista'/>
                <?php
                    $intervalo = 0; 
                    while ($exibe_news = mysqli_fetch_assoc($resultado_noticia) ){
                        echo "<div class='container cada-noticia'>
                            <div class='img-lista-news'><a class='tipo-lista' href='/noticia/".$exibe_news['id']."'>
                                <img src='".$exibe_news['fotoUrl']."'/></a>
                            </div>
                            <div class='news-info'>
                                <a class='tipo-lista' href='/noticias/".$listaPalavras[($exibe_news['tipo'])]."'>" 
                                    .$listaPalavrasConvertidas[($exibe_news['tipo'])]
                                    .
                                "</a><br>
                                <a  href='/noticia/".$exibe_news['id']."'><p class='titulo-lista'>" 
                                    .$exibe_news['title']
                                    .
                                "</p></a>
                                <p class='data-lista-noticia'>"
                                    .converteData($exibe_news['createdAt']).
                                "</p> 
                                <hr class='linhas-lista'/>
                            </div> 
                            
                        </div>";
                        // if ($intervalo ==3){
                        //     echo 
                        //     "<div class='anuncio-lista-noticia'>
                        //         <img src='https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/anuncio.jpg?alt=media&token=df4d99dd-84b5-4a9e-bda9-e15c12842135'/>
                        //     </div>";
                        // }
                        // $intervalo++;
                        
                    }
                    
                    if ($URL[1] == 0){
                        
                          
                       
                        echo "<nav aria-label='Page navigation example'><ul class='pagination' ><li class='page-ite'><li class='page-item'> <a class='page-link' href='/noticias'>Início</a></li>";
                        for ($pag_ant = $pagina - $max_link; $pag_ant <=$pagina -1; $pag_ant++){
                            if ($pag_ant >= 1){
                                echo "<li class='page-item'><a class='page-link' href='/noticias?pagina=$pag_ant'>$pag_ant</a></li>";

                            }
                        }

                        echo "<li class='page-item ativ'><p class='page-link'>".$pagina."</p></li>";

                        for ($pag_dps = $pagina + 1; $pag_dps <= $pagina + $max_link ; $pag_dps++){
                            if ($pag_dps <= $qnt_pag){
                                echo "<li class='page-item ' ><a class='page-link' href='/noticias?pagina=$pag_dps'>$pag_dps</a></li>";

                            }
                        }
                        echo "<li class='page-item'><a class='page-link' href='/noticias?pagina=$qnt_pag'>Final</a></li> </ul>
                        </nav>";
                    }


                    else{
                        echo "<nav aria-label='Page navigation example'><ul class='pagination'><li class='page-item'><a class='page-link' href='/noticias/".$listaPalavras[($URL[1])]."'>Início</a></li>";

                        for ($pag_ant = $pagina - $max_link; $pag_ant <=$pagina -1; $pag_ant++){
                            if ($pag_ant >= 1){
                                echo "<li class='page-item'><a class='page-link' href='/noticias/".$listaPalavras[($URL[1])]."?pagina=$pag_ant'>$pag_ant</a></li>";

                            }
                        }

                        echo "<li class='page-item ativ' ><p class='page-link'>".$pagina."</p></li>";

                        for ($pag_dps = $pagina + 1; $pag_dps <= $pagina + $max_link ; $pag_dps++){
                            if ($pag_dps <= $qnt_pag){
                                echo "<li class='page-item'><a class='page-link' href='/noticias/".$listaPalavras[($URL[1])]."?pagina=$pag_dps'>$pag_dps</a></li>";

                            }
                        }

                        echo "<li class='page-item'><a class='page-link' href='/noticias/".$listaPalavras[($URL[1])]."?pagina=$qnt_pag'>Última</a></li> </ul>
                        </nav>";
                    }
                    
                    
                
                
                ?>
                
                   
            </div><!-- fim da div-noticias -->
            <div class="div-anuncios"></div>
        </div>
    </div>
    
    
        
        
        
        
        
        
    

    
    
</html>