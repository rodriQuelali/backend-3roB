<?php
   /* $result = mysql_query("SELECT * FROM libros Where autor='DonBosco'");
   // if(!$result){
        echo mysql_error();
        exit;
   // }
    echo "<´table width='100%'>\n";
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
echo "<tr>\n";
echo "<td>". $row ['cod_libro']."</td>\n";
echo "<td>". $row ['libro']."</td>\n";

echo "<tr>\n";*/

    //}
// funcion para obener un virtuallibro por el id buscar registro
public static function getByid($cod_libro)
{
   $db=DB :: getConnect();
   $select=$db-> prepare('SELECT * FROM virtuallibro where cod_libro=:cod_libro');
   $select -> bindValue('cod_libro',$cod_libro);
   $select-> execute();
   //asegure  objeto virtuallibro
   $virtuallibroDB=$select ->fetch();
   $virtuallibro=new virtuallibro($virtuallibroDB ['cod_libro'],$virtuallibroDB ['fecha_registro'],$virtuallibroDB ['codigo_administrador'],$virtuallibroDB ['ci_usuario'],);
   return $virtuallibro;
}
// funcion para obener un virtuallibro por el id buscar libros
public static function buscarLibro($Nombre)
{
   $db=DB :: getConnect();
   $select=$db-> prepare('SELECT * FROM virtuallibro where nombre=:nombre');
   $select -> bindValue('nombre',$Nombre);
   $select-> execute();
   //asegure  objeto virtuallibro
   $virtuallibroDB=$select ->fetch();
   $virtuallibro=new virtuallibro($virtuallibroDB ['cod_libro'],$virtuallibroDB ['titulo_libro'],$virtuallibroDB ['autor'],$virtuallibroDB ['editorial'],$virtuallibroDB ['cantidad'],$virtuallibroDB ['genero'],,$virtuallibroDB ['fecha_publicacion'],);
   return $virtuallibro;
}

?>
