<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/bb9dd5bb45.js"></script>
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>

<body>
    <form action="" class="form" method="post">

        <h1>INGRESA</i></h1> 

        <div class="contenedor">
           

            <div class="input-container">
            <i class="fa-solid fa-envelope" icon></i>
            <input type="email" placeholder="Correo" name="ingresoEmail">
            </div>

            <div class="input-container">
            <i class="fa-solid fa-key" icon></i>
            <input type="password" name="ingresoPassword" id="pwd" placeholder="Contraseña">
            </div>
            

        </div> 
        <?php
            require_once "controladores/formularios.controlador.php";
            $ingreso = new ControladorFormularios();
            $ingreso -> ctrIngreso();
        ?>
        <input type="submit" value="Ingresar" class="button">
        <p>Aceptas condiciones de uso y políticas de privacidad</p>

        <p>¿No tenés cuenta? <a class="link" href="index.php?ruta=registro"> Registrate</a><p>

    
</form>
      
</body>
</html>
