<?php
if (isset($_GET["id"])){
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
}

?>

<div>

    <form method="post">
        <input type="text" value="<?php echo $usuario["nombre"];?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
        <input type="text" value="<?php echo $usuario["email"];?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
        <input type="password" placeholder="Escriba su contraseña" id="password" name="actualizarPassword">
        <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>" >
        <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>" >


        <?php 
         $actualizar = ControladorFormularios::ctrActualizarRegistro();
          
        ?>
    </form>

</div>