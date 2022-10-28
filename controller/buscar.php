<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA BUSCAR</title>
</head>
<body>
    <div>
        <h2>BUSQUEDA</h2>
        <form  method="POST">
            <table>
                <tr><td>DATO:<input type="search" name="busca" id="" required></td></tr> 
                <tr><td><input type="submit" value="Buscar"></td></tr>
            </table>
            
        </form>
        <a href="./index.php"><input type="submit" value="cancelar" name="cancelar"></a>
    </br>
    </div>
        <?php
       include('conecction.php');
       $db=Db::getConnect();

        $buscar=$_POST['busca'];
        $select=$db->prepare("SELECT Id, nombre, paterno ,materno,ci, fechaNaci,contra FROM usuario WHERE nombre LIKE '$buscar' '%' OR ci LIKE '$buscar' '%' OR
        paterno LIKE '$buscar' '%' ");
        $select->execute();
        if($select){
            echo "<table border=1>
            <tr><td>Id:</td>
            <td>paterno:</td>
            <td>materno:</td>
            <td>nombre:</td>
            <td>ci:</td>
            <td>Fecha:</td></tr>";
        while($fila=$select->fetch()){
            $id=$fila['Id'];
            $paterno=$fila['paterno'];
            $materno=$fila['materno'];
            $nombre=$fila['nombre'];
            $ci=$fila['ci'];
            $fechaNaci=$fila['fechaNaci'];
            $contra=$fila['contra'];
            echo "<tr><td>$fila[0]</td>";//se muestra el ID 
            echo "<td>$fila[1]</td>";//se muestra el paterno
            echo "<td>$fila[2]</td>";//se muestra el materno
            echo "<td>$fila[3]</td>";//se muestra el nombre
            echo "<td>$fila[4]</td>";//se muestra el ci
            echo "<td>$fila[5]</td>";//se muestra el fecha de nacimiento
           
            ?>
            <?php echo "</tr>";
           
        }    
            echo "</table>";
        }
        
    ?>
    
</body>
</html>

