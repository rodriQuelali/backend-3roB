<?php
require_once "model/Libro_model.php";
class Libro{
    public function RegistrarLibro()
    {
        $titulo=$_GET["txtTitulo"];
        $autor=$_GET["txtAutor"];
        $editorial=$_GET["txtEditorial"];
        $cantidad=$_GET["txtCantidad"];
        $genero=$_GET["txtGenero"];
        $fechaP=$_GET["txtFecha"];
        $returnDatos = array();
        $res = Model_Libro::modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP);
        echo json_encode($res);
    }
}
?>