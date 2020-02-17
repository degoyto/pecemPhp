<?php 

    

?>
<!-- cabeçalho da noticia -->
<div class="container">
    <h1 class="titulo-pagina">ÚLTIMAS NOTÍCIAS</h1>
    <hr />

    <div class="noticia-anuncio">
        <div class="container div-noticia-nova">
            <!-- primeira noticia -->
            <div class="noticia-nova">
                <!-- Imagem da notícia principal -->
                <div class="div-img-nova">
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[0]['id'] ?>">
                        <div class="img-noticia-nova" style="background-image: url('<?php echo $listaNovaNoticia[0]['fotoUrl']?>')"></div> 
                    </a>
                </div>

                <!-- início da div com os dados da notícia -->
                <div class="div-info-nova">
                    <a href="https://jornalportodopecem.com.br/#/noticias/<?php echo $listaNovaNoticia[0]['tipo'] ?>">
                        <p class="tipo-noticia-nova">
                            <?php echo $listaNovaNoticia[0]["tipo"]?>
                        </p>
                    </a>
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNovaNoticia[0]['id'] ?>">
                        <p class="titulo-noticia-nova">
                            <?php echo $listaNovaNoticia[0]["title"]?>
                        </p>
                    </a>
                
                </div> <!-- final da div com os dados da notícia -->
            </div>  <!-- final da div "noticia-nova" -->
            <!-- Fim da primeira noticia -->

            <!-- segunda noticia -->
            <div class="noticia-nova">
                <!-- Imagem da notícia principal -->
                <div class="div-img-nova">
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[1]['id'] ?>">
                        <div class="img-noticia-nova" style="background-image: url('<?php echo $listaNovaNoticia[1]['fotoUrl']?>')"></div> 
                    </a>
                </div>

                <!-- início da div com os dados da notícia -->
                <div class="div-info-nova">
                    <a href="https://jornalportodopecem.com.br/#/noticias/<?php echo $listaNovaNoticia[1]['tipo'] ?>">
                        <p class="tipo-noticia-nova">
                            <?php echo $listaNovaNoticia[1]["tipo"]?>
                        </p>
                    </a>
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNovaNoticia[1]['id'] ?>">
                        <p class="titulo-noticia-nova">
                            <?php echo $listaNovaNoticia[1]["title"]?>
                        </p>
                    </a>
                
                </div> <!-- final da div com os dados da notícia -->
            </div>  <!-- final da div "noticia-nova" -->
            <!-- Fim da segunda noticia -->

            <!-- terceira noticia -->
            <div class="noticia-nova">
                <!-- Imagem da notícia principal -->
                <div class="div-img-nova">
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[2]['id'] ?>">
                        <div class="img-noticia-nova" style="background-image: url('<?php echo $listaNovaNoticia[2]['fotoUrl']?>')"></div> 
                    </a>
                </div>

                <!-- início da div com os dados da notícia -->
                <div class="div-info-nova">
                    <a href="https://jornalportodopecem.com.br/#/noticias/<?php echo $listaNovaNoticia[2]['tipo'] ?>">
                        <p class="tipo-noticia-nova">
                            <?php echo $listaNovaNoticia[2]["tipo"]?>
                        </p>
                    </a>
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNovaNoticia[2]['id'] ?>">
                        <p class="titulo-noticia-nova">
                            <?php echo $listaNovaNoticia[2]["title"]?>
                        </p>
                    </a>
                
                </div> <!-- final da div com os dados da notícia -->
            </div>  <!-- final da div "noticia-nova" -->
            <!-- Fim da terceira noticia -->

            <!-- quarta noticia -->
            <div class="noticia-nova">
                <!-- Imagem da notícia principal -->
                <div class="div-img-nova">
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[3]['id'] ?>">
                        <div class="img-noticia-nova" style="background-image: url('<?php echo $listaNovaNoticia[3]['fotoUrl']?>')"></div> 
                    </a>
                </div>

                <!-- início da div com os dados da notícia -->
                <div class="div-info-nova">
                    <a href="https://jornalportodopecem.com.br/#/noticias/<?php echo $listaNovaNoticia[3]['tipo'] ?>">
                        <p class="tipo-noticia-nova">
                            <?php echo $listaNovaNoticia[3]["tipo"]?>
                        </p>
                    </a>
                    <a class="link-noticia-nova" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNovaNoticia[3]['id'] ?>">
                        <p class="titulo-noticia-nova">
                            <?php echo $listaNovaNoticia[3]["title"]?>
                        </p>
                    </a>
                
                </div> <!-- final da div com os dados da notícia -->
            </div>  <!-- final da div "noticia-nova" -->
            <!-- Fim da quarta noticia -->

           

        </div> <!-- final da div 'div-noticia-nova' -->
        <div class="div-anuncio-nova container">
            <div class="anuncio-noticia-nova">
                <a class="link-noticia-nova" href="https://www.ignisfit.com/">
                    <div class="img-anuncio-nova" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/ignis_1024.png?alt=media&token=212109ed-a7cd-47b5-89ad-0d28d0f894d2)"></div> 
                </a>
            </div>
            <!-- <div class="anuncio-noticia-nova">
                <img src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/anuncio.jpg?alt=media&token=df4d99dd-84b5-4a9e-bda9-e15c12842135" 
                        class="img-anuncio-nova"/>
                
            </div> -->
        </div>
    </div><!-- final da div 'noticia-anuncio' -->
</div>
        
  


    



