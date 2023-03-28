<?php
include_once 'cabeceraSistema.php';
include_once "conexion.php";
if(isset($_SESSION["editado"])){echo '<script language="javascript">alert("Material editado");</script>';unset($_SESSION["editado"]);}
if (isset($_POST['nombre'])) {
    $nom=$_POST['nombre'];
    $sql="select * from productos where nombre like '%$nom%'";
} else {
    $sql="select * from productos";
}
?>

<h2>Filtrar Materiales</h2>
<form action="listamateriales.php" method="post">
Producto: 
    <input type="text" name="nombre" id="">
    <input type="submit" value="Filtrar">
</form>
<form action="listaDisponibles.php" method="post">
    <input type="submit" value="Mostrar Todo">
</form>

<?php
$registros=mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
    echo "<h2>Materiales disponibles</h2>";
echo '<table class="tablalistado" border="1">';
echo '<tr><th>Codigo</th><th>Nombre</th><th>Descripcion</th><th>Estado</th><th>Stock</th><th>Edicion</th></tr>';
while ($reg=mysqli_fetch_array($registros)){
    echo '<tr>';
    echo "<td>".$reg['idProducto']."</td>";
    echo "<td>".$reg['nombre']."</td>";
    echo "<td>".$reg['descripcion']."</td>";
    echo "<td>";
    $r=$reg['estado'];
    switch($r){
        case "N": echo "Nuevo"; break;
        case "R": echo "Reciclado"; break;
        case "U": echo "Usado"; break;
    }
    echo "</td>";
    echo"<td>".$reg['stock']."</td>";
    echo"<td><a href='editarMaterial.php?m=$reg[idProducto]'>Editar</a></td>";
    echo '</tr>';
}
echo '</table>';
mysqli_close($conexion);
?>
</body>
</html>