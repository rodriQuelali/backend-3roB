<?php
		 require_once "db.php";
		 class Model_libro
		 {
		    public function modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaPubli)
		    public function modelLibroAgregar($titulo,$autor,$editorial,$cantidad,$genero,$fechaP,$categoria)
		    {
		

		        if(!empty($titulo)&& !empty($autor) && !empty($editorial) && !empty($cantidad) && !empty($genero) && !empty($fechaPubli)){
		        if(!empty($titulo)&& !empty($autor) && !empty($editorial) && !empty($cantidad) && !empty($genero) && !empty($fechaPubli) && !empty($categoria)){
		            $consulta= "INSERT INTO  libro (titulo_libro,autor,editorial,cantidad,genero,fecha_publicacion)  VALUES ('$titulo','$autor','$editorial','$cantidad','$genero','$fechaPubli','$categoria')";
		            $returnDatos = "";
		            if(mysqli_query(Conexion::conect(),$consulta)){
		                echo json_encode("se registro correctamente");
		

		            }else{
		                echo "error:".$consulta."".mysqli_error(Conexion::conect());
		                echo json_encode("error al registrar");
		

		        $consulta= "INSERT INTO  libro (titulo_libro,autor,editorial,cantidad,genero,fecha_publicacion)  VALUES ('$titulo','$autor','$editorial','$cantidad','$genero','$fechaPubli')";
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
		

		    public function modelLibroListarCategoria($categoria)
		    {
		        if(!empty($categoria)){
		            $consulta= "SELECT l.cod_libro as codigo, l.titulo_libro as titulo, l.autor as autor,l.editorial as editorial, l.cantidad as cantidad, l.genero as genero, l.fecha_publicacion as fecha, c.nombre_categoria as categoria FROM libro l INNER JOIN categoria c ON l.id_categoria=c.cod_categoria WHERE c.cod_categoria = '$categoria' OR c.nombre_categoria='$categoria' ";
		            $returnDatos = "";
		            $returnDatos = array();
		            //nueva forma para realizar una instancia
		            $query = Conexion::conect()->query($consulta);
		            while ($row = $query->fetch_assoc()) {
		                $returnDatos [] = array(
		                    "titulo"=>$row["titulo"],
		                    "autor"=>$row["autor"],
		                    "editorial"=>$row["editorial"],
		                    "cantidad"=>$row["cantidad"],
		                    "genero"=>$row["genero"],
		                    "fecha_publicacion"=>$row["fecha"],
		                    "categoria"=>$row["categoria"]
		                );
		

		            }
		            return ($returnDatos);
		

		        }else{
		            echo json_encode("datos vacios");
		        }
		    }
        }
    }
}
?>



