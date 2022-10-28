<?php
require_once "db.php";
require_once "model/Libro_model.php";

class Libro {

    public function ListLibro()
    {
        # code...
        $returnDatos = array();
      $res = Model_libro::modelLibroList();

        echo json_encode($res);
    }

}

	
