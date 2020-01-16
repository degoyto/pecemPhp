<?php
    
    $n1 = teste($connect, $id);
    $n2 = teste($connect, $id, $n1["id"]);
    $n3 = teste($connect, $id, $n2["id"]);
    $n4 = teste($connect, $id, $n3["id"]);

?>

<div class="container">
    
    <div class="container extra">
        <h1>Outras Notícias</h1>
        <hr />
        <div class="noticia-lista">
            <div class="imagem-lista" style="background-image: url(<?php echo $n1['fotoUrl']?>)"></div>
            <div class="info">
                <p class="tipo-lista"><?php echo $n1["tipo"]?></p>
                <p class="titulo-lista"><?php echo $n1["title"]?></p>
            </div>
        </div>
        <div class="noticia-lista">
            <div class="imagem-lista" style="background-image: url(<?php echo $n2['fotoUrl']?>)"></div>
            <div class="info">
                <p class="tipo-lista"><?php echo $n2["tipo"]?></p>
                <p class="titulo-lista"><?php echo $n2["title"]?></p>
            </div>
        </div>
        <div class="noticia-lista">
            <div class="imagem-lista" style="background-image: url(<?php echo $n3['fotoUrl']?>)"></div>
            <div class="info">
                <p class="tipo-lista"><?php echo $n3["tipo"]?></p>
                <p class="titulo-lista"><?php echo $n3["title"]?></p>
            </div>
        </div>
        <div class="noticia-lista">
            <div class="imagem-lista" style="background-image: url(<?php echo $n4['fotoUrl']?>)"></div>
            <div class="info">
                <p class="tipo-lista"><?php echo $n4["tipo"]?></p>
                <p class="titulo-lista"><?php echo $n4["title"]?></p>
            </div>
        </div>
        
        
    </div>

</div>
<style>
    .extra{
        width:100%;
        margin-top:100px;
    }
    hr{
        display:block;
        border-top: 4px solid #009999;
        margin-left:0px;
        margin-top:3px;
        margin-bottom:10px;
        width:95%;
    }
    .noticia-lista{
        width:100%;
        height:200px;
        
        margin-bottom:20px;
        display:flex;
    }
    .imagem-lista{
        width:50%;
        background-size:cover;
        height:200px;
    }
    .imagem-lista img{
        width:100%;
    }
    .info{
        width:50%;
       
        padding:10px;
        padding-top:0px;
    }
    .tipo-lista{
        font-size:10px;
        text-transform:uppercase;
        margin-bottom:0px;
        color:#009999;
    }
    .titulo-lista{
        font-size:18px;
        
    }
    
    @media screen and (min-width: 992px){
        .extra{
            width:65%;
            
        }
    }

    @media screen and (min-width: 1200px){


    }
</style>