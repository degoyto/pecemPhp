<?php 

    

?>
<!-- cabeçalho da noticia -->
<div class="container">
    <h1 class="titulo-pagina">NOTÍCIAS EM DESTAQUE</h1>
    <hr />
    <!-- inicio da div noticia e outros -->
    <div class="container div-noticia-outros">
        <!-- início da div de notícias -->
        <div class="container div-noticia">
            <!-- Imagem da notícia principal -->
            <a class="link-noticia" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[0]['id'] ?>">
                <div class="img-noticia" style="background-image: url(<?php echo $listaNoticia[0]['fotoUrl']?>)"></div> 
            </a>
            <!-- início da div com os dados da notícia -->
            <div class="div-info">
                <a href="https://jornalportodopecem.com.br/#/noticias/<?php echo $listaNoticia[0]['tipo'] ?>">
                    <p class="tipo-noticia">
                        <?php echo $listaNoticia[0]["tipo"]?>
                    </p>
                </a>
                <a class="link-noticia" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[0]['id'] ?>">
                    <p class="titulo-noticia">
                        <?php echo $listaNoticia[0]["title"]?>
                    </p>
                    <p class="resumo-noticia">
                        <?php echo $listaNoticia[0]["resumo"]?>
                    </p>
                    
                </a>
            </div> <!-- final da div com os dados da notícia -->
            <!-- início de outras notícias principais -->
            <div class="outras-noticias-principais">
                <?php include("principaisNoticias2.php")?>
            </div><!-- final de outras notícias principais -->
            
        </div> <!-- final da div notícias -->
        <div class ="outros">
    
        </div>
    </div>
    
   
</div>
        
  

<style>
    /* cabecalho das noticias principais */
    .container{
        text-align:center;
        
    }
    .titulo-pagina{
        margin-top:20px;
        font-size: 150%;
    }
    hr{
      display:block;
      border-top: 4px solid #009999;
      margin-left:5%;
      margin-top:3px;
      margin-bottom:-2px;
      width:90%;
    }
    /* noticia */
    .div-noticia{
        margin-top:20px;
        width:100%;
        text-align:left;
        
    }
    .div-noticia a{
        text-decoration:none;
    }
    /* imagem */
    .img-noticia{
        width: 100%;
        height:40vh;
        border-radius:7px;
        background:gray;
        min-width:250px;
        min-height:250px;
        max-height:350px;
        background-size:cover;
    }
    /* o tipo da noticia */
    .tipo-noticia{
        color:#009999;
        text-transform:uppercase;
        font-size:12px;
        margin-top:20px;
    }
    .tipo-noticia:hover{
        color:#142248;
    }
    /* titulo da noticia */
    .titulo-noticia{
        font-size:24px;
        color:#212121;
        margin-top:-15px;
    }
    .titulo-noticia:hover{
        color:#009999;
    }

    /* resumo da notícia (bigode) */
    .resumo-noticia{
        font-size:16px;
        color:#212121;
        
    }
    .outras-noticias-principais{
        text-align:left;
    }


    

</style>
    



