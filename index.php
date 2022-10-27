<?php

require_once "controller/Libro.php";

header('Access-Control-Allow-Origin: *');

//$data = Libro::RegistrarLibro();
$data=Libro::FiltrarLibroPorCategoria();
echo ($data);

?>