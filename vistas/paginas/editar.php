<?php
if (isset($_GET["id"])){
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
}

?>

<div>

    <form method="post">
        <input type="text" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
        <input type="text" value="<?php echo $usuario["email"];?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
        <input type="password" placeholder="Escriba su contraseña" id="password" name="actualizarPassword">
        <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>" >
        <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>" >


        <?php 
         $actualizar = ControladorFormularios::ctrActualizarRegistro();
          if ($actualizar == "ok"){
            echo '<script>

            if (window.history.replaceState){
            window.history.replaceState ( null, null, window.locationi.href);
        }
            </script>';

            echo '<div class= "alert alert-sucess"> Los datos se actualizaron correctamente </div>

            <script>
            setTimeout(function(){
                window.location = "index.php?paginas=inicio";
            }
            ,3000);

            </script>';

          }

        ?>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

</div>