<?php  

 require_once 'Model/conexion.php';

 class CategoriasModel{

     public function deleteCategoriasModel($datosModel,$tabla){
      $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idcategoria = :idcategoria");

      $sql->bindParam(':idcategoria', $datosModel, PDO::PARAM_INT);

      if ($sql->execute()) {
         return 'success';
      }else{
        return 'Error';
      }

      //$sql->close();
    }


 }