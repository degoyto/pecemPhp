<?php 

?>


<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>



<!-- Your share button code -->
<div class="container">
    <div class="container caixa-face">
        <div class="fb-like" 
            data-href="https://developers.facebook.com/docs/plugins/" 
            data-width="" data-layout="standard" data-action="like" 
            data-size="large" 
            data-share="true">
        </div>
        
        <div class="fb-comments comentario" 
            data-href="https://developers.facebook.com/docs/plugins/comments#configurator" 
            data-width="" data-numposts="5">
        </div>

    </div>
</div>   
    
<style>
    .caixa-face{
        width:100%;
        margin-top:100px;
    }
    .fb-like{
        margin-bottom:20px;
    }
    @media screen and (min-width: 992px){
        .caixa-face{
            width:65%;
            margin-top:100px;
        }
    }

    @media screen and (min-width: 1200px){


    }
    
</style>