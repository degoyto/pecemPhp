<?php
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

?>

<div class="container-flex">
    <div class="container cabecalho">
        <div class="data-rede">
            <p class="datap">
                Pecém,<?php echo ucfirst( utf8_encode( strftime(" %d" ) ) ); ?> de
                    <span><?php echo ucfirst( utf8_encode( strftime(" %B " ) ) ); ?></span>de
                    <?php echo ucfirst( utf8_encode( strftime(" %Y" ) ) ); ?>

            </p>
            
        </div>
        
        <div class="logo-anuncio">
            <a class="logo" href="https://jornalportodopecem.com.br">
                <img src="../assets/logo.svg"/>
            </a>
            <a class="anuncio" href="https://jornalportodopecem.com.br">
                <img src="../assets/anuncio.jpg"/>
            </a>
        </div>


    </div>
    
</div>

<style>
    .cabecalho{
        margin-top:20px;
        
    }
    .datap{
        font-size:12px;
        margin-left:25px;
    }
    .datap span{
        text-transform:capitalize;
    }
    .logo-anuncio{
        display:flex;
    }
    .logo{
        margin-left:-40px;
        width:85%;
    }
    .logo img{
        width:100%;
    }
    .anuncio{
        width:20%;
    }
    .anuncio img{
        width:150%;
        margin-left:-15px;
        margin-top:68px;
        height:32px;
    }
    
 
    /*versão pc*/
  
    @media screen and (min-width: 992px){
        .logo{
            margin-left:-70px;
            width:65%;
        }
        .anuncio img{
            width:175%;
            margin-left:70px;
            margin-top:111px;
            height:100px;
        }
    


  

    }

    @media screen and (min-width: 1200px){
 
  
    }
</style>
