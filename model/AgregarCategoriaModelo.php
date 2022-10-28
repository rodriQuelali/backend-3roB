<?php  

  public function getAgregarCategoriasModel($tabla){
         
         $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
         $sql->execute();
         return $sql->fetchAll();

         $sql->close();

       }

       
       
