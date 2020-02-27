<?php
    

?>

<div class="container-flex">
    <div class="container cabecalho">
        <div class="data-rede">
            <p class="datap">
                Pecém,<?php  setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); 
                echo ucfirst( utf8_encode( strftime(" %d" ) ) ); ?> de
                    <span><?php echo ucfirst( utf8_encode( strftime(" %B " ) ) ); ?></span>de
                    <?php echo ucfirst( utf8_encode( strftime(" %Y" ) ) ); ?>

            </p>
            
        </div>
        
        <div class="logo-anuncio">
            <a class="logo" href="/pecemphp">
                <img src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/logo.svg?alt=media&token=445447d8-81bb-4cdb-8006-55eb0c677445"/>
            </a>
            <!-- <a class="anuncio" href="https://jornalportodopecem.com.br">
                <img src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/anuncio.jpg?alt=media&token=df4d99dd-84b5-4a9e-bda9-e15c12842135"/>
            </a> -->
        </div>


    </div>
    
</div>


