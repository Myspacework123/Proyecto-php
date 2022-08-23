<?php

class conexion{

    public static function conectar(){
        $server = "localhost";
        $usuario = "root";
        $password = "";

        $db = "senasoft";

        try {

            $objConexion = new PDO('mysql:host='.$server.';dbname='.$db.';',$usuario,$password);
            $objConexion->setAttribute(PDO::ATTTR_ERRMODE, PDO:ERRMODE_EXCEPTION);

        }catch(\Throwlable $th){
            
        }
    }

}