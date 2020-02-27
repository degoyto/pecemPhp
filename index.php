<?php 
    include("__confidencialsite__/api/converteNome.php");

    $REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
    $INITE = strpos($REQUEST_URI, "?");
    if($INITE){
        $REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
    }
    $REQUEST_URI_PASTA = substr($REQUEST_URI,  10);

    $URL = explode("/", $REQUEST_URI_PASTA);
    
    if ($URL[0] == ''){
        $URL[0] = 'home';
    }
    

    if(file_exists('__confidencialsite__/'.$URL[0].".php")){
        if(count($URL) == 1){
            $URL[1] = 0;
        }
        
        
        if($URL[0]=="noticia" and $URL[1] == 0){
            require ('__confidencialsite__/404.php');
        }
        
        else{
            if ($URL[0] === "noticias" and is_string($URL[1]) ){
                
                $URL[1] = encontraPalavra($URL[1], $listaPalavras);
                
                if ($URL[1] === -1){
                    header("Location: http://testejornal.tk/noticias");
                }
            }
            
            

            require ('__confidencialsite__/'.$URL[0].".php");
        }
        
    }
    elseif (is_dir('__confidencialsite__/'.$URL[0])) {
        if($URL[0]=='api' or $URL[0]=='assets' or $URL[0]=='componente' or $URL[0]=='css'){
            require ('__confidencialsite__/404.php');
        }
        else{
            echo "teste";
        }
        # code...
    }
    else{
        require ('__confidencialsite__/404.php');
    }
    





?>




