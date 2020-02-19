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
                <div class="img-noticia" style="background-image: url('<?php echo $listaNoticia[0]['fotoUrl']?>')"></div> 
            </a>
            <!-- <a class="link-noticia" href="https://jornalportodopecem.com.br/noticia/<?php echo $listaNoticia[0]['id'] ?>">
                <div class="img-noticia">
                    <img src="<?php echo $listaNoticia[0]['fotoUrl']?>"/>
                </div> 
            </a> -->
            <!-- início da div com os dados da notícia -->
            <div class="div-info">
                <a href="noticias/<?php echo $listaPalavras[($listaNoticia[0]['tipo'])] ?>">
                    <p class="tipo-noticia">
                        <?php echo $listaPalavrasConvertidas[($listaNoticia[0]["tipo"])]?>
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
            <!-- <div class="outras-noticias-principais">
                <?php //include("principaisNoticias2.php")?>
            </div>final de outras notícias principais -->
            
        </div> <!-- final da div notícias -->


        <div class ="outros">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container caixa-dolar-cel">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/symbols/FX_IDC-USDBRL/" rel="noopener" target="_blank"><span class="blue-text">USDBRL Cotações</span></a> pelo TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                    "symbol": "FX_IDC:USDBRL",
                    
                    "locale": "br",
                    "dateRange": "1d",
                    "colorTheme": "light",
                    "trendLineColor": "#37a6ef",
                    "underLineColor": "#e3f2fd",
                    "isTransparent": false,
                    "autosize": true,
                    "largeChartUrl": ""
                    }
                </script>
            </div>
            <div class="tradingview-widget-container caixa-dolar-pc">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/symbols/FX_IDC-USDBRL/" rel="noopener" target="_blank"><span class="blue-text">USDBRL Cotações</span></a> pelo TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                    {
                    "symbol": "FX_IDC:USDBRL",
                    
                    "locale": "br",
                    "dateRange": "1d",
                    "colorTheme": "light",
                    "trendLineColor": "#37a6ef",
                    "underLineColor": "#e3f2fd",
                    "isTransparent": false,
                    "autosize": true,
                    "largeChartUrl": ""
                    }
                </script>
            </div>
            
            <div class="container div-anuncio">
                <a href="http://www.rodopublis.com.br" class="link-anuncio">
                    <img src="https://imagensportopecem2.s3.amazonaws.com/anuncios/rodo.jpg" class="anuncio">
                </a>
            </div>
            <button type="button" class="btn btn-primary btn-boletim" onclick="window.location.href = 'noticias/boletim-portuario'">BOLETIM PORTUÁRIO</button>
            <!-- <button type="button" class="btn btn-primary btn-boletim">CLASSIFICADOS</button> -->
            <!-- TradingView Widget END -->
        </div>
    </div>

    <div class="outras-noticias-principais-cel">
        <?php include("principaisNoticias2.php")?>
    </div>
    
   
</div>
        
  


    



