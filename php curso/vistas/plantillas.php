<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb9dd5bb45.js"></script>
    <link rel="stylesheet" href="./public/css/style.css">
    <title>ViajAR</title>
</head>
<div id="contenedor">

        <header>
       
            <nav>
                <ul class="horizontal">
                    <li><a href="index.php?ruta=inicio">INICIO</a></li>

                    <li><a href="index.php?ruta=ingreso">Ingreso</a></li>

                    <li><a href="#">Paquetes</a>
                        <ul class="vertical">
                        <li><a href="index.php?ruta=mendoza">Mendoza</a>
                        <li><a href="index.php?ruta=bariloche">Bariloche</a>
                        <li><a href="index.php?ruta=jujuy">Jujuy</a>
                        <li><a href="index.php?ruta=cordoba">Córdoba</a>  
                    </ul>
                    </li>    

                    <li><a href="index.php?ruta=salir">Salir</a></li>
                    <li><a href="index.php?ruta=error">Error</a></li>
                </ul>
            </nav>

            
            <div class="logo">
        <h1>Viaj<span style="color: #0995d6;"><strong>AR</strong></span></h1>
        </div>
            
    
        
        </header>
       
        <section id="contenido">
       
            <?php
            if (isset($_GET['ruta'])){
                if(
                    $_GET['ruta'] == "inicio" ||
                    $_GET['ruta'] == "ingreso" ||
                    $_GET['ruta'] == "registro" ||
                    $_GET['ruta'] == "mendoza" ||
                    $_GET['ruta'] == "bariloche" ||
                    $_GET['ruta'] == "jujuy" ||
                    $_GET['ruta'] == "cordoba" ||
                    $_GET['ruta'] == "salir"

                ){
                    include  "paginas/" . $_GET["ruta"] .  ".php";
                }else{
                    include "paginas/error404.php";
                    }
            }
            
            else{
                    include "paginas/inicio.php";
                }
             
            ?>

        </section>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vistas/js/script.js"></script>    
</body>
</html>
