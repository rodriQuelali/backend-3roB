<?php
require_once "model/Filtrarmodel.php";
class Libro{
    /*funcion para Agregar o insertar los libros*/
    public function RegistrarLibro()
    {
        $titulo=$_GET["txtTitulo"];
        $cantidad=$_GET["txtCantidad"];
        $genero=$_GET["txtGenero"];
        $fechaP=$_GET["txtFecha"];
        $categoria=$_GET["txtIdCategoria"];
        $returnDatos = array();
        $res = Model_Libro::modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP,$categoria);
        echo json_encode($res);
    }

    public function FiltrarLibroPorCategoria()
    {
        $categoria=$_GET["txtCategoria"];
        $returnDatos = array();
        $res = Model_Libro::modelLibroListarCategoria($categoria);
        echo json_encode($res);
    }
}