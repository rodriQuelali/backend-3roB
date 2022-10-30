<?php 
    if (isset($_POST["usu"]) && isset($_POST["pass"])) {

        require_once("../Model/login.php");
        $validar = new Login();
        $validar->validarDatos($_POST["usu"], $_POST["pass"]);

    } else {
        header("location:../index.php");
    }
?>