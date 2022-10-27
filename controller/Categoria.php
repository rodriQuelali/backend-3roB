<?php
require_once "model/CategoriaModel.php";

class Categoria {

    public function ListCategoria()
    {
        $returnDatos = array();
      $res = Categoria_Model::modelCategoriaList();

        echo json_encode($res);
    }
    
}