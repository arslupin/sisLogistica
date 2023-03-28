<?php
include_once 'cabeceraSistema.php';
include "conexion.php";
if(isset($_SESSION["nuevo"])){echo '<script language="javascript">alert("Material guardado");</script>';unset($_SESSION["nuevo"]);}

$idM=$_GET['m'];
$registro=$conexion->query("select * from productos where idProducto=$idM")
        or die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registro)){
?>
    <h1>Editar Material</h1>
    <form action="editarMaterial2.php" method="post">
        <input type='hidden' value=<?php echo $idM;?> name="idP">
        Nombre:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['nombre']?>"><br>
        Descripcion:<br>
        <textarea name="descripcion" id="" cols="40" rows="6"><?php echo $reg['descripcion'];?></textarea><br>
        Estado:<br>
        <select name="estado">
            <option value="R" <?php if($reg['estado']=="R")echo'selected="selected"';?>>Reciclado</option>
            <option value="U" <?php if($reg['estado']=="U")echo'selected="selected"';?>>Usado</option>
            <option value="N" <?php if($reg['estado']=="N")echo'selected="selected"';?>>Nuevo</option>
        </select><br>
        Cantidad:<br>
        <input type="number" name="cantidad" id="" min=1 value=<?php echo $reg['stock']?>><br>
        <input type="submit" value="Editar material">
    </form>

<?php
}
mysqli_close($conexion);
?>
</body>
</html>