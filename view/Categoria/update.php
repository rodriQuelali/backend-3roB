<p>--- EDITAR CATEGORIA ----</p>
<form action='Categoria.php' method='post'>
    <input type='hidden' name='action' value='update'>
    <input type='hidden' name='id' value='<?php echo $categoria->Cod_categoria;?>'>
    <table>
        <tr>
            <td><label>NOMBRE CATEGORIA:</label></td>
            <td><input type="text" name='Nombre_categoria' value='<?php echo $categoria->Nombre_categoria; ?>'></td>
        </tr>
    </table>
    <input type="submit" value="ACTUALIZAR">
</form>