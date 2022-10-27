<?php
class Conexion 
{
    public function conect()
    {
        $conec = new mysqli('localhost', 'root', '', 'academico');
        if($conec->connect_error){
            die('Error en la conexion' . $conec->connect_error);
        }
        return $conec;
    }
}
