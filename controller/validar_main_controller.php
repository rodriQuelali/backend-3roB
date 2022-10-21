<?php 

    session_start();
    if (isset($_SESSION["usu"]) && isset($_SESSION["pass"])) {
        
        require_once("model/validar.php");
        $validar = new Validar();
        $validar->validarDatos();

        include_once("Views/Layouts/layout.php");
        
    } else {

        if (isset($_SESSION["error"])) {
        
            echo "<p>Usuario y/o contraseña incorrecto</p>";
            unset($_SESSION["error"]);
    
        }

        include_once("Views/Alumno/login.php");
    }
?>