

<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title>Jornal Porto do Pecém - Adicionar Noticia </title>
        <link type="text/css" rel="stylesheet" href="css/geral/cabecalho.css"/>
        <link type="text/css" rel="stylesheet" href="css/adm/addNoticia.css"/>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/geral/rodape.css"/>
        
        <style>
            body{
                font-family: 'Roboto', sans-serif;
            }
    
        </style>

    </head>
    
    
    <body>
        <?php include("componente/cabecalho.php")?>
        <?php include("componente/navbar.php")?>
        <?php include("componente/adicionar/form.php")?>
        <?php include("componente/rodape.php")?>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
    </body>
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-analytics.js"></script>
    
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-storage.js"></script>

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyAw6xl5wzRaJDJPWVqrrWlhKBiR3EvZO0M",
        authDomain: "jornal-porto-do-pecem.firebaseapp.com",
        databaseURL: "https://jornal-porto-do-pecem.firebaseio.com",
        projectId: "jornal-porto-do-pecem",
        storageBucket: "jornal-porto-do-pecem.appspot.com",
        messagingSenderId: "117754526845",
        appId: "1:117754526845:web:4f764a08dd39dbbc9f0514",
        measurementId: "G-KWJJNLNFEC"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    function uploadImage(){
        document.getElementById('caixa-confirma').className = "caixa-confirma-aparece";
        const ref = firebase.storage().ref()
        const file = document.querySelector('#foto').files[0]
        const name = new Date() + '-' + file.name
        const metadata = {
            contentType:file.type
        }

        const task = ref.child("noticias/"+name).put(file, metadata)
        task.then(snapshot => snapshot.ref.getDownloadURL()).then(url =>{
            console.log(url)
            const imageelement = document.querySelector("#imagem")
            const testeelement = document.querySelector("#teste")
            document.getElementById('titulo-confirma').innerHTML="confirmar"
            imageelement.src = url
            testeelement.value = url
            
            
        })
    }



    firebase.analytics();
    </script>
    


</html>