<?php
		require_once "controller/listarLibroController.php";
		

		header('Access-Control-Allow-Origin: *');
		

		$data = Libro::RegistrarLibro();
		//$data = Libro::RegistrarLibro();
		$data=Libro::FiltrarLibroPorCategoria();
		echo ($data);
		

		?>

?>