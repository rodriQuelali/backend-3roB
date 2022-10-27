<?php

class Categoria{
    //atributos
    public $Cod_categoria;
    public $Nombre_categoria;

    //CONSTRUCTOR DE LAS CLASE
    function __construct($Cod_categoria, $Nombre_categoria){
        $this->Cod_categoria=$Cod_categoria;
        $this->Nombre_categoria=$Nombre_categoria;
    }
    //funcion para tener todos los usuarios
      public static function all(){
        $listaCategoria=[];
        $db=Db::getConnect();
        $sql=$db->query('SELECT * FROM categoria');
        //cargar los registros 
        foreach($sql->fetchAll() as $categoria){
            $listaCategoria[]=new Categoria($categoria['Cod_categoria'],$usuario['Nombre_ategoria']);
        }
        return $listaCategoria;
    }


    //REGISTRAR CATEGORIA
    public static function save($categoria){
        $db=Db::getConnect();
        $insert=$db->prepare('INSERT INTO categoria VALUES
        (Null,:Nombre_categoria)');
        $insert->bindValue('Nombre_categoria',$categoria->Nombre_categoria);
        $insert->execute();
    }

    //ACTUALIZAR CATEGORIA
    public static function update($categoria){
        $db=Db::getConnect();
        $update=$db->prepare('UPDATE categoria SET Nombre_categoria=:Nombre_categoria WHERE Cod_categoria=:Cod_categoria');
        $update->bindValue('Cod_categoria',$categoria->Cod_categoria);
        $update->bindValue('Nombre_categoria',$categoria->Nombre_categoria);
        $update->execute();
    }
}
?>