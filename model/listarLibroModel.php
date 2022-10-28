<?php
require_once "db.php";

class Model_libro{

    public function modelLibroList()
    {
        # code...
        $listar = "SELECT * FROM libro";
        $returnDatos = "";
        $returnDatos = array();
        //nueva forma para realizar una instancia
        $query = Conexion::conect()->query($listar);
            while ($row = $query->fetch_assoc()) {
                # code...
                $returnDatos [] = array(
                    "titulo_libro"=>$row["titulo_libro"]
                );
               //return $row;
            }

        return ($returnDatos);
    }
}
?>