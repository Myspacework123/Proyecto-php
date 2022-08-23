<?php

require_once "../Modelo/usuariosModelo.php";

class CtrUsuarios{

    public $nombre;
    public $apellido;
    public $direccion;

    public function registrarUsuarios(){
        $objRespuesta = MdlUsuarios::mdlRegistrarUsuarios($this->nombre,$this->apellido,$this->direccion);
        echo json_encode($objRespuesta);

    }

}

if  (isset($_POST["nombres"],$_POST["apellidos"],$_POST["direccion"])){

    $objUsuarios = new CtrUsuarios();
    $objUsuarios->nombre = $_POST["nombres"];
    $objUsuarios->apellido = $_POST["apellidos"];
    $objUsuarios->direccion = $_POST["direccion"];

    $objUsuarios->registrarUsuarios();

}