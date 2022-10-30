<?php  
ob_start();

class CategoriasController {
  
  public function deleteCategoriasController(){
     if (isset($_GET['idBorrar'])) {
      $datosController = $_GET['idBorrar'];

   #pedir la informacion al modelo.
      $respuesta = CategoriasModel::deleteCategoriasModel($datosController,'categorias');
      if ($respuesta == 'success') {
         header('location:borrarCategorias');
      }
     }
   }
}
