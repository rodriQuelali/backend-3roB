<?php

require_once "db.php";

class ModeloLibros{
	

	if(isset($_GET["fecha_publicacion"])){

		$fechaInicial = $_GET["fecha_publicacion"];
		$fechaFinal = $_GET["fechaFinal"];
	
	}else{
	
	$fechaInicial = null;
	$fechaFinal = null;
	
	}

/*=============================================
	RANGO POR FECHAS 
	=============================================*/	

	static public function mdlRangoFechas( $tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$stmt = db::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();	 


		}else if($fechaInicial == $fechaFinal){

			$stmt = db::conectar()->prepare("SELECT * FROM $tabla  WHERE fecha_publicacion like '%$fechaFinal%'");

			$stmt -> bindParam(":fecha_publicacion", $fechaFinal, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = db::conectar()->prepare("SELECT * FROM $tabla  WHERE fecha_publicacion BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");

			}else{


				$stmt = db::conectar()->prepare("SELECT * FROM $tabla  WHERE fecha_publicacion BETWEEN '$fechaInicial' AND '$fechaFinal'");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}
}