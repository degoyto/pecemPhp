<?php 

    

?>
<!-- principais noticias 2 -->
<div class="caixa-dois">
    <!-- informações da notícia -->
    <div class="caixa-noticia-2 container">
        <a href="noticias/<?php echo $listaPalavras[($listaNoticia[1]['tipo'])] ?>">
            <p class="tipo-noticia-2">
                <?php echo $listaPalavrasConvertidas[($listaNoticia[1]["tipo"])]?>
            </p>
        </a>
        <a class="link-noticia" href="/noticia/<?php echo $listaNoticia[1]['id'] ?>">
            <p class="titulo-noticia-2">
                <?php echo $listaNoticia[1]["title"]?>
            </p>
           
        </a>
    </div>
    <div class="caixa-noticia-2 container">
        <a href="noticias/<?php echo $listaPalavras[($listaNoticia[2]['tipo'])] ?>">
            <p class="tipo-noticia-2">
                <?php echo $listaPalavrasConvertidas[($listaNoticia[2]["tipo"])]?>
            </p>
        </a>
        <a class="link-noticia" href="/noticia/<?php echo $listaNoticia[2]['id'] ?>">
            <p class="titulo-noticia-2">
                <?php echo $listaNoticia[2]["title"]?>
            </p>
            
            
        </a>
    </div>


    <div class="caixa-noticia-2 container">
        <a href="noticias/<?php echo $listaPalavras[($listaNoticia[3]['tipo'])] ?>">
            <p class="tipo-noticia-2">
                <?php echo $listaPalavrasConvertidas[($listaNoticia[3]["tipo"])]?>
            </p>
        </a>
        <a class="link-noticia" href="/noticia/<?php echo $listaNoticia[3]['id'] ?>">
            <p class="titulo-noticia-2">
                <?php echo $listaNoticia[3]["title"]?>
            </p>
            
            
        </a>
    </div>

    
   
   
    
   
</div>
        
  


    



