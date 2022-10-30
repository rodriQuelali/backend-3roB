

<?php
require_once('conecction.php');
if(isset($_GET['controller'])&& isset($_GET['action'])){
    $controller=$_GET['controller'];
    $action=$_GET['action'];
}
else{
    $controller='categoria';
    $action='index';
}
require_once('view/layout.php');
<?php
		require_once "controller/listarLibroController.php";
		

		header('Access-Control-Allow-Origin: *');
		

		$data = Libro::RegistrarLibro();
		//$data = Libro::RegistrarLibro();
		$data=Libro::FiltrarLibroPorCategoria();
		echo ($data);
		

		?>

?>