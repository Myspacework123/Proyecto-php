<?php
require_once "conexion.php";
class MdlUsuarios{

    public static function mdlRegistrarUsuarios($nombres,$apellidos,$direccion){
        $mensaje = null;
        try {
            $objRespuesta = conexion::conectar()->prepare("Insert into usuario(nombres, apellidos, direccion) values(:nombres,:apellidos,:direccion)");
            $objRespuesta->bindParam(":nombres",$nombres);
            $objRespuesta->bindParam(":apellidos",$apellidos);
            $objRespuesta->bindParam(":direccion",$direccion);
    
            if ($objRespuesta->execute()){
                $mensaje = "Datos registrados correctamente";
            } else {
                $mensaje = "Error: No se ha guardado los datos";
            }
        }catch (Expection $th){
            $mensaje = $th;
        }

    return $mensaje;
    
    }

}