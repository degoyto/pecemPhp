<?php 

    

?>
<!-- principais noticias 2 -->
<div >
    <!-- informações da notícia -->
    <div class="caixa-noticia-2">
        <a href="https://jornalportodopecem.com.br/#/noticias/<?php echo $listaNoticia[0]['tipo'] ?>">
            <p class="tipo-noticia-2">
                <?php echo $listaNoticia[0]["tipo"]?>
            </p>
        </a>
        <a class="link-noticia" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[0]['id'] ?>">
            <p class="titulo-noticia-2">
                <?php echo $listaNoticia[0]["title"]?>
            </p>
            <p class="resumo-noticia-2">
                <?php echo $listaNoticia[0]["resumo"]?>
            </p>
            
        </a>
    </div>
   
    
   
</div>
        
  

<style>
    .dois{
        text-align:left;
    }
   .caixa-noticia-2{
       text-align:left;
   }


    

</style>
    



