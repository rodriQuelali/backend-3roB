<?php
require_once "model/Libro_model.php";
class Libro{
    /*funcion para Agregar o insertar los libros*/
    public function RegistrarLibro()
    {
        $titulo=$_GET["txtTitulo"];
        $autor=$_GET["txtAutor"];
        $editorial=$_GET["txtEditorial"];
        $cantidad=$_GET["txtCantidad"];
        $genero=$_GET["txtGenero"];
        $fechaP=$_GET["txtFecha"];
        $categoria=$_GET["txtIdCategoria"];
        $returnDatos = array();
        $res = Model_Libro::modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP,$categoria);
        echo json_encode($res);
    }
    
    /*funcion para Listar libros po categoria*/
    public function FiltrarLibroPorCategoria()
    {
        $categoria=$_GET["txtCategoria"];
        $returnDatos = array();
        $res = Model_Libro::modelLibroListarCategoria($categoria);
        echo json_encode($res);
    }

    public function FiltrarLibroProFecha()
    {
        $fechaIni=$_GET["txtFechaInicio"];
        $fechaFin=$_GET["txtFechaFin"];
        $returnDatos = array();
        $res = Model_Libro::modelLibroFiltrarFecha($fechaIni,$fechaFin);
        echo json_encode($res);
    } 
}
?>