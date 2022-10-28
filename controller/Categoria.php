<?php  
require_once "modell/Libro_model.php";
class Categoria{

	
		public function agregarCategoriasController(){
	  
			if (isset($_POST['agregarCategorias'])) {++
			   
			  $datosCategoriaController = array("cod_categoria"=>$_POST['cod_categoria'])
			   $datosCategoriaController = array("nombre_categoria"=>$_POST['nombre_categoria']
				   );
										   
	  
			   $respuesta = CategoriasModel::agregarCategoriasModel($datosCategiriaController,'categorias');
	  
			   if ($respuesta == 'success') {
					header('location:okCategorias');
			   }else{
				   header('location:categorias');
			   }
			}

		}
		
	
	
}






 
