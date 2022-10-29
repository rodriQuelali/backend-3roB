<?php
		require_once "model/Libro_model.php";
		class Libro{
		    /*funcion para Agregar libros*/
		    public function RegistrarLibro()
		    {
		        $titulo=$_POST["txtTitulo"];
	            public function RegistrarLibro()
		        $cantidad=$_POST["txtCantidad"];
		        $genero=$_POST["txtGenero"];
		        $fechaP=$_POST["txtFecha"];
		        $categoria=$_POST["txtIdCategoria"];
		        $returnDatos = array();
		        $res = Model_Libro::modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP);
		        $res = Model_Libro::modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP,$categoria);
		        echo json_encode($res);
		    }
		

		    /*funcion para listar libros por categoria*/
		    public function FiltrarLibroPorCategoria()
		    {
		        $categoria=$_POST["txtCategoria"];
		        $returnDatos = array();
		        $res = Model_Libro::modelLibroListarCategoria($categoria);
		        echo json_encode($res);
		    }
		}
		?>
