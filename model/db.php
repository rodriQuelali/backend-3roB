<?php
class Conexion 
{
    public function conect()
    {
        # code...
        //new mysqli ---> 1ra conexion
        //pdo ---> 2do conexion, puedo hacer conexion mysqly, pgsmysqly
        $conec = new mysqli('localhost', 'root', '', 'academico');
        if($conec->connect_error){
            die('Error en la conexion' . $conec->connect_error);
        }
        return $conec;
    }
}
