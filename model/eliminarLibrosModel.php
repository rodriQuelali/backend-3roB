<?php  

 require_once 'Model/conexion.php';

 class LibrosModel{

     public function deleteLibrosModel($datosModel,$tabla){
      $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idlibro = :idlibro");

      $sql->bindParam(':idlibro', $datosModel, PDO::PARAM_INT);

      if ($sql->execute()) {
         return 'success';
      }else{
        return 'Error';
      }

      //$sql->close();
    }


 }