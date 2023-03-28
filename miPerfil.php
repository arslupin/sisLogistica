<?php
include_once 'cabeceraSistema.php';
include "conexion.php";

$id=$_SESSION['id'];
$registro=$conexion->query("select * from usuarios where idUsuario=$id")
        or die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registro)){
?>
    <h1>Datos de cuenta</h1>
    <form action="" method="post">
        <input type='hidden' value=<?php echo $id;?> name="id">
        Nombres:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['nombre']?>"><br>
        Apellidos:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['apellido']?>"><br>
        DNI:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['dni']?>"><br>
        Celular:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['celular']?>"><br>
        Direccion:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['direccion']?>"><br>
        Email:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['email']?>"><br>
        Area:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['idArea']?>"><br>
        Clave:<br>
        <input type="text" name="nombre" id="" value="<?php echo $reg['clave']?>"><br>
        <br>
        <input type="submit" value="Editar">
    </form>

<?php
}
mysqli_close($conexion);
?>
</body>
</html>