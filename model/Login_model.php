<?php
require_once "db.php";

class Model_login{

    public function modelLogin()
    {
        # code...
        $listar = "SELECT * FROM alumnos WHERE ci = ".$_POST["txtuser"]." and password=".$_POST["txtpas"];
        $returnDatos = "";
        //nueva forma para realizar una instancia
        $query = Conexion::conect()->query($listar);
            while ($row = $query->fetch_assoc()) {
                # code...
                $returnDatos = "ok";
               return $returnDatos;
            }
            $returnDatos = "err";
        return ($returnDatos);
    }
}