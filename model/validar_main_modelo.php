<?php 

    require_once("Conexion.php");

    class Validar {

        public function validarDatos() {

            try {
                $con = null;
                $sql = null;
                $resultado = null;
                $cantidad_resultado = null;

                // Recuperamos la conexión
               $con = Conexion::getConection();
                //$con=Db::getConnect();

                // Validación de error
                if ($con == "ERROR") {
                    header("location:salir_controller.php");
                }

                // Consulta
                $sql = "SELECT * FROM usuarios WHERE ci = :USU AND pass = :PASS";

                $resultado = $con->prepare($sql);
                $resultado->execute(array(":USU"=>$_SESSION["usu"], ":PASS"=>$_SESSION["pass"]));

                $cantidad_resultado = $resultado->rowCount();

                if ($cantidad_resultado == 0) {

                   header("location:controllers/salir_controller.php");

                } 

                
            } catch (Exception $e) {


            } finally {
                $con = null;
                $sql = null;
                $resultado = null;
                $cantidad_resultado = null;
            }
        }

    }
?>