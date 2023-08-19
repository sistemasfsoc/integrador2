<?php

require_once "modelos/formularios.modelo.php";
    
class ControladorFormularios{

    static public function ctrRegistro(){
        if(isset($_POST["regnombre"])){
            
                $tabla = "registros";
                
                $encriptarPassword = crypt($_POST["regpassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datos = array(
                    "nombre" => $_POST["regnombre"],
                    "email" => $_POST["regemail"],
                    "password" => $encriptarPassword
                );
                
                $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
                
                return $respuesta;
            }else{
                $respuesta = "error";

				return $respuesta;
            }
        }
    //-----------select registro
    static public function ctrSeleccionarRegistros($item, $valor){
        $tabla = "registros";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);
        return $respuesta;
    }

//-----ingreso

    public function ctrIngreso(){
        if(isset($_POST["ingresoEmail"])){
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);

            $encriptarPassword = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $encriptarPassword){

                $_SESSION["validarIngreso"] == "ok";
                echo '<script>
                
                    if (window.history.replaceState){
                        window.history.replaceState(null,null,window.location.href);
                    }

                    window.location = "index.php?ruta=inicio";
                </script>';   

            }else{
                echo '<script>
                
                    if (window.history.replaceState){
                        window.history.replaceState(null,null,window.location.href);
                    }

                </script>';   
                echo '<div class = alert alert-danger> Error al ingresar el email o contraseña incorrecta</div>';
            }
        }
    }
    //----------------update registro
    static public function ctrActualizarRegistros(){
        if(isset($_POST["actualizarNombre"])){
            if($_POST["actualizarPassword"] != "") {
                $password = $_POST["actualizarPassword"];
            }else{
                $password = $_POST["passwordActual"];
            }
                $tabla = "registros";

                $datos = array(
                    "id" => $_POST["idUsuario"],
                    "nombre" => $_POST["actualizarNombre"],
                    "email" => $_POST["actualizarEmail"],
                    "password" => $password
                );

                $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla,$datos);
                if($respuesta == "ok"){
                    echo '<script>
                
                        if (window.history.replaceState){
                            window.history.replaceState(null,null,window.location.href);
                        }

                        window.location = "index.php?ruta=inicio";
                    </script>';   
                }
            
        }
        
    }

    //--------borrar registro
    static public function ctrEliminarRegistro(){
        if(isset($_POST["eliminarNombre"])) {
            

                $tabla = "registros";
                $valor = $_POST["eliminarRegistro"];

                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
                if($respuesta == "ok") {
                    echo '<script>
                        
                                if (window.history.replaceState){
                                    window.history.replaceState(null,null,window.location.href);
                                }

                                window.location = "index.php?ruta=inicio";
                            </script>';
                }
            
        }
                
    }

}