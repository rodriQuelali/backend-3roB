<?php

require_once "db.php";

class ModeloLibros{

/*=============================================
	RANGO POR FECHAS 
	=============================================*/	

	 function mdlRangoFechas( $tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$rango = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$rango -> execute();

			return $rango -> fetchAll();	 


		}else if($fechaInicial == $fechaFinal){

			$rango= Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE fecha_publicacion like '%$fechaFinal%'");

			$rango -> bindParam(":fecha_publicacion", $fechaFinal, PDO::PARAM_STR);

			$rango -> execute();

			return $rango -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE fecha_publicacion BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");

			}else{


				$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE fecha_publicacion BETWEEN '$fechaInicial' AND '$fechaFinal'");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}

}
	$arrayFechas = array();

foreach ($respuesta as $key => $value) {

	#Capturamos sólo el año y el mes
	$fecha = substr($value["fecha_publicacion"],0,7);

	#Introducir las fechas en arrayFechas
	array_push($arrayFechas, $fecha);
}
$noRepetirFechas = array_unique($arrayFechas);


?>