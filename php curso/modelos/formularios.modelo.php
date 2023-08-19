<?php

require_once "conexion.php";

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexcion::conectar()->prepare("INSERT INTO $tabla(nombre,email,password) VALUES (:nombre, :email, :password)");
        
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        
        if($stmt->execute()){
             return "ok";
        }else{
            print_r(Conexcion::conectar()->errorInfo());
        }
        $stmt->closeCursor();
        $stmt = null;
    }

    static public function mdlSeleccionarRegistro($tabla,$item,$valor){
        if($item == null && $valor == null){
            $stmt = Conexcion:: conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/Y') AS fecha FROM $tabla ORDER BY id DESC ");
        }else{
            $stmt = Conexcion:: conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/Y') AS fecha FROM $tabla ORDER BY id DESC ");
            $stmt ->execute();
            return $stmt ->fetch();
                    
        }
        $stmt->closeCursor();
        $stmt = null;

    }

    static public function mdlActualizarRegistros($tabla,$datos){
        
        $stmt = Conexcion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id=: id");
        
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        if($stmt->execute()){
             return "ok";
        }else{
            print_r(Conexcion::conectar()->errorInfo());
        }
        $stmt->closeCursor();
        $stmt = null;

    }

    static public function mdlEliminarRegistro($tabla,$valor){
        
        $stmt = Conexcion:: conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt -> bindParam(":id", $valor, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r((Conexcion::conectar()->errorInfo()));

        }
        $stmt->closeCursor();
        $stmt = null;


    }
}