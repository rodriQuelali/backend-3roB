<?php  
ob_start();

class LibrosController {
  
  public function deleteLibrosController(){
     if (isset($_GET['idBorrar'])) {
      $datosController = $_GET['idBorrar'];

   #pedir la informacion al modelo.
      $respuesta = LibrosModel::deleteLibrosModel($datosController,'libros');
      if ($respuesta == 'success') {
         header('location:borrarLibros');
      }
     }
   }
}
