<?php
    
    $n1 = teste($connect, $id);
    $n2 = teste($connect, $id, $n1["id"]);
    $n3 = teste($connect, $id, $n2["id"]);
    $n4 = teste($connect, $id, $n3["id"]);

?>


<!-- aqui fica as notícias que podem interessar o leitor, elas aparecem junto quando ler a notícia -->
<div class="container">
    
    <div class="container extra">
        <h1>Outras Notícias</h1>
        <hr />

            <div class="noticia-lista">
                <div class="imagem-lista" style="background-image: url(<?php echo $n1['fotoUrl']?>)"></div>
                <div class="info">
                    <a href="/noticias/<?php echo $listaPalavras[($n1['tipo'])]?>">
                        <p class="tipo-lista"><?php echo $listaPalavrasConvertidas[($n1["tipo"])]?></p>
                    </a>
                    <a href="https://jornalportodopecem.com.br/noticia/<?php echo $n1['id'];?>"> 
                        <p class="titulo-lista"><?php echo $n1["title"]?></p>
                    </a>

                </div>
            </div>
        
        
        
            <div class="noticia-lista">
                <div class="imagem-lista" style="background-image: url(<?php echo $n2['fotoUrl']?>)"></div>
                <div class="info">
                    <a href="/noticias/<?php echo $listaPalavras[($n2['tipo'])]?>">
                        <p class="tipo-lista"><?php echo $listaPalavrasConvertidas[($n2["tipo"])]?></p>
                    </a>
                    <a href="https://jornalportodopecem.com.br/noticia/<?php echo $n2['id'];?>">
                        <p class="titulo-lista"><?php echo $n2["title"]?></p>
                    </a>
                </div>
            </div>
            
            <div class="noticia-lista">
                <div class="imagem-lista" style="background-image: url(<?php echo $n3['fotoUrl']?>)"></div>
                <div class="info">
                    <a href="/noticias/<?php echo $listaPalavras[($n3['tipo'])]?>">
                        <p class="tipo-lista"><?php echo $listaPalavrasConvertidas[($n3["tipo"])]?></p>
                    </a>
                    <a href="/noticia/<?php echo $n3['id'];?>"> 
                        <p class="titulo-lista"><?php echo $n3["title"]?></p>
                    </a> 
                </div>
            </div>

               
        
            <div class="noticia-lista">
                <div class="imagem-lista" style="background-image: url(<?php echo $n4['fotoUrl']?>)"></div>
                <div class="info">
                    <a href="/noticias/<?php echo $listaPalavras[($n4['tipo'])]?>">
                        <p class="tipo-lista"><?php echo $listaPalavrasConvertidas[($n4["tipo"])]?></p>
                    </a>
                    <a href="/noticia/<?php echo $n4['id'];?>">
                        <p class="titulo-lista"><?php echo $n4["title"]?></p>
                    </a>
                </div>
            </div>
        
        
    </div>

</div>
