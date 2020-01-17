<?php 
    


?>


<div class="fundo container-flex">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#142248">

            <button class="navbar-toggler hamb" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menu" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto pc">
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/destaques" >destaques portuários</a></li>
        
                    <li class="noticias-btn"><a href="https://jornalportodopecem.com.br/#/noticias/noticias" >Notícias</a>
                        <ul>
                            <li><a href="https://jornalportodopecem.com.br/#/noticias/nacionais">Nacionais</a></li>
                            
                            <li><a href="https://jornalportodopecem.com.br/#/noticias/internacionais" >Internacionais</a></li>
                                            
                        </ul>
                    </li>
                    
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/artigos" >Artigos e Opinião</a></li>
                    
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/turismo" > turismo</a></li>

                    <li><a href="https://jornalportodopecem.com.br/#/noticias/comex" >Comércio exterior</a></li>
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/logistica">logística e transporte</a></li>
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/entrevistas" >entrevistas</a></li> 
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/portos" >Portos do Brasil</a></li>
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/eventos" >Eventos</a></li>
                </ul>


                <ul class="cel">
            
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/destaques" >destaques portuários</a></li>
                    
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/nacionais">Nacionais</a></li>
                            
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/internacionais" >Internacionais</a></li>
                    
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/artigos" >Artigos e Opinião</a></li>
                    
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/turismo" > turismo</a></li>

                    <li><a href="https://jornalportodopecem.com.br/#/noticias/comex" >Comércio exterior</a></li>
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/logistica">logística e transporte</a></li>
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/entrevistas" >entrevistas</a></li> 
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/portos" >Portos do Brasil</a></li>
                    <li><a href="https://jornalportodopecem.com.br/#/noticias/eventos" >Eventos</a></li>
                                                        
                </ul>



                <form class="form-inline my-2 my-lg-0 pesquise" id="formulario">
                    <input class="form-control mr-sm-2" id="input-pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquise">
                    <button class="btn btn-outline-success my-2 my-sm-0 btn-pesquisa" type="submit">Pesquise</button>
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button> -->
                </form>
            </div>
        </nav>
    </div>
</div>
<div class="container" style="margin-top:13px; width:150%;">
    <form class="form-inline my-2 my-lg-0 pesquisa" id="formulario">
        <input size="46.5" class="form-control mr-sm-2 form-control-sm input-pesquisa" type="search" placeholder="Pesquise" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-2 btn-sm btn-pesquisa"  type="submit">Pesquisar</button>
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button> -->
    </form>

</div>

<script>
    var form = document.getElementById('formulario');
    var campo = document.getElementById('input-pesquisa');

    form.addEventListener('submit', function(e) {
        // alerta o valor do campo
        window.location = "https://jornalportodopecem.com.br/#/resultado/"+campo.value;

        // impede o envio do form
        e.preventDefault();
    });
</script>

<style>
    .fundo{
        background-color:#142248;
        margin-top:-10px;  
    }

    /*barra menu*/
    .pc{
        display:none;
    }

    .cel{
        display:block;
        list-style: none;
        text-align:center;
    }
    .hamb{
        margin-left:90%;
    }

    .cel li a{
        color:white;
        text-transform:uppercase;
    }
    .cel li a:hover{
        color: #009999;
        text-decoration: none;
    }
    .pesquisa{
        display:none
    }
    .btn-pesquisa{
        background:#009999;
        color:white;
    }

/*versão pc*/

    @media screen and (min-width: 992px){

        .pesquise{
            display:none;
            
        }
        .pesquisa{
            display:block;
            margin-left:59.5%;
            
        }
        
        .pc{display:block}
        .noticias-btn{
            display: block;
        }

        .menu ul {
            padding:0px;
            margin-left:0px;
            margin-bottom:0px;
            list-style:none;
        }
        .menu ul li { 
            display: inline;
        }
        .menu ul li a {
            margin-left:5px;
            display: inline-block;
            cursor:pointer;
            /* visual do link */
            font-size: 65%;
            color: white;
            text-decoration: none;
            text-transform: uppercase;  
        }



        .menu ul li a:hover {
            color:#009999;   
        }
        .noticias-btn ul {
            position:absolute; 
            top:28px; 
            left:130px;
            border:1px solid #c0c0c0; 
            background-color: #142248; 
            display:none;
        } 

        .noticias-btn:hover ul, .menu li.over ul{display:block;}
        .noticias-btn ul li{

            display:block; 
            width:150px;
        }
        .cel{
            display:none;
        }




    }
    @media screen and (min-width: 1200px){
        .menu ul {
            
            margin-left:20px;
            margin-bottom:0px;
            
        }
        .menu ul li a {
            margin-left:8px;
            /* visual do link */
            font-size: 12px;
            
            
        }
        .portos-btn ul {
            position:absolute; 
            top:28px; 
            left:950px;
            border:1px solid #c0c0c0; 
            background-color: #142248; 
            display:none;
        } 

}
</style>