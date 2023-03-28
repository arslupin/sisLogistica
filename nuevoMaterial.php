<?php
include_once 'cabeceraSistema.php';
if(isset($_SESSION["nuevo"]))echo '<script language="javascript">alert("Material guardado");</script>';
?>
    <h1>Nuevo Material</h1>
    <form action="nuevoMaterial2.php" method="post">
        Nombre:<br>
        <input type="text" name="nombre" id=""><br>
        Descripcion:<br>
        <textarea name="descripcion" id="" cols="40" rows="6"></textarea><br>
        Estado:<br>
        <select name="estado">
            <option value="N">Nuevo</option>
            <option value="R">Reciclado</option>
            <option value="U">Usado</option>
        </select><br>
        Cantidad:<br>
        <input type="number" name="cantidad" id="" min=1 value=1><br>
        <input type="submit" value="Agregar material">
    </form>
</body>
</html>