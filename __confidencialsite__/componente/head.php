<?php


?>


<meta charset="UTF-8">
<meta name="description" <?php echo "content='" . $exibe['resumo'] . "'"; ?>>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <meta property="og:url"           content="<?php //echo $_SERVER['SCRIPT_URI'] ?>" />  -->
<meta property="og:url"           content="<?php echo $_GET['url'] ?>" /> 
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $exibe['title'] ?>" />
<meta property="og:description"   content="<?php echo $exibe['resumo'] ?>" />
<meta property="og:image"         content="<?php echo $exibe['fotoUrl'] ?>" />
<title> <?php echo $exibe['title'] ?> </title>
<link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/favicon.ico?alt=media&token=80c3e669-e158-4fa2-8bf9-f96ec1c42098" >

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

