
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb9dd5bb45.js"></script>
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Document</title>
</head>

<body>
    <form  action="" class="form" method="post">

        <h1>REGISTRO</i></h1> 

        <div class="container">
            <div class="input-container">
            <i class="fa-solid fa-user" icon></i>
            <input type="text" placeholder="nombre" id='nombre' name="regnombre">
            </div>

            <div class="input-container">
            <i class="fa-solid fa-envelope" icon></i>
            <input type="text" placeholder="email" id='email' name="regemail">
            </div>

            <div class="input-container">
            <i class="fa-solid fa-key" icon></i>
            <input type="password" placeholder="password" id='pw' name="regpassword">
            </div>

        </div> 

        <?php
            require_once "controladores/formularios.controlador.php";
            $registro = ControladorFormularios::ctrRegistro();
        ?>

        <input type="submit" value="Registrate" class="button">
        <p>Aceptas condiciones de uso y políticas de privacidad</p>

        <p>¿Ya tenés cuenta? <a class="link" href="index.php?ruta=ingreso"> Iniciá sesión con tus credenciales</a><p>

    
</form>
      
</body>
</html>