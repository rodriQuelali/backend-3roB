<?php
 require_once "db.php";
 class Model_libro
 {
    public function modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP)
    {

        if(!empty($titulo)&& !empty($autor) && !empty($editorial) && !empty($cantidad) && !empty($genero) && !empty($fechaP)){

        $consulta= "INSERT INTO  libro (titulo_libro,autor,editorial,cantidad,genero,fecha_publicacion)  VALUES ('$titulo','$autor','$editorial','$cantidad','$genero','$fechaP')";
        $returnDatos = "";
        if(mysqli_query(Conexion::conect(),$consulta)){
            echo json_encode("se registro correctamente");
            
        }else{
            echo "error:".$consulta."".mysqli_error(Conexion::conect());
            echo json_encode("error al registrar");

        }

        }else{
            echo json_encode("datos vacios");
        }
    }
}
 ?>