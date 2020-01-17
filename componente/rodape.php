<?php

?>
<div class="container-flex">
    <div class="div-anuncio">
        <a href="#">
            <img src="../assets/anuncio.jpg"/>
        </a>
    </div>
    <div class="rodape">
        <div class="container itens">
            <ul>
                <li><a href="#/noticias/destaques" >destaques portuários</a></li>
                    
                <li><a href="#/noticias/nacionais" >Nacionais</a></li>
                            
                <li><a href="#/noticias/internacionais" >Internacionais</a></li>
                
                <li><a href="#/noticias/artigos" >Artigos e Opinião</a></li>
                
                <li><a href="#/noticias/turismo" > turismo</a></li>

                <li><a href="#/noticias/comex" >Comércio exterior</a></li>
                <li><a href="#/noticias/logistica" >logística e transporte</a></li>
                <li><a href="#/noticias/entrevistas" >entrevistas</a></li> 
                <li><a href="#/noticias/portos" >Portos do Brasil</a></li>
                <li><a href="#/noticias/eventos" >Eventos</a></li>
                                                
                        
                    
            </ul>
        </div>
        <div class="container menu2">
            <ul class="menu-rodape" >

                <!-- <li><a class="primeiro-link" href="#">INFORMAÇÕES ÚTEIS</a></li>
                <li><a href="#">EMPREGOS NO PECÉM</a></li>    -->

                <li><a href="#/quemsomos">QUEM SOMOS</a></li>
                <li><a href="#/expediente">EXPEDIENTE</a></li>
                <li><a href="#">CONTATO</a></li>
                
            </ul>
			
			<p class="copyright">Copyright Jornal do Porto do Pecém 2019. Todos os direitos reservados.</p>
        
        </div>
        
    </div>
    
</div>

<style>
    .div-anuncio{
        background:#009999;
        text-align:center;
        margin-bottom:20px;
        height:120px;
    }
    .div-anuncio a img{
        width:100%;
        height:120px;
    }
    .itens{
        display:none;
        
    }
    .menu2{
        text-align:center;
    }
    .itens ul{
        list-style: none;
        padding-top:20px;
        
    }
    .itens ul li{
        display: inline;
    }
    .itens ul li a {
        text-transform: uppercase;
        color:white;
        
        margin-left:10px;
        font-size:11px;
    }
    .itens ul li a:hover {
        
        color:#009999;
        text-decoration: none;
        
        
    }
    .rodape{
        width:100%;
        background-color:#142248;
        color:white;
        margin-bottom:-250px;
    }
    .menu-rodape {
        padding:10px;
        list-style: none;
    }
    .menu-rodape a{
        color:white;

    }
    .menu-rodape a:hover{
        color:#009999;
        text-decoration: none;
        
    }
  @media screen and (min-width: 992px){
    .itens{
      display:block;
    }
    .menu-rodape li{
      display: inline;
    }
    .menu-rodape li a{
      margin-left:20px;
      
      font-size:20px;
    }
    .div-anuncio a img{
        width:50%;
        height:120px;
    }
    

  }
</style>