<?php


class ControladorLibros{
/*=============================================
	RANGO POR FECHAS
	=============================================*/	

	static public function ctrRangoFechas($fechaInicial, $fechaFinal){

		$tabla = "libro";

		$respuesta = ModeloLibros::mdlRangoFechas($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;
		
	}
}