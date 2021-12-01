<?php

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo'
            <script>
                alert("INICIA SESION POR FAVOR");
                window.location = "index.php";
            </script>
        
        ';
        session_destroy();
        die();
    }
    session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/galeria.css">
    <title>GALERIA</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">MANGA GALLERY</h2>
        <div class="lightbox-gallery">
            <div><img src="assets/images/black.jpg"></div>
            <div><img src="assets/images/cow.jpg"></div>
            <div><img src="assets/images/happy.jpg" ></div>
            <div><img src="assets/images/mako.png" ></div>
            <div><img src="assets/images/mit.jpg" ></div>
            <div><img src="assets/images/prie.jpg" ></div>
        </div>
      <a href="php/cerrar_sesion.php">CERRAR SESIÓN</a>
    </div>
    
    
</body>
</html>