<?php
include_once 'cabeceraSistema.php';
include_once 'conexion.php';
?>
<h2>Agregar producto</h2>
<form action="detalleSolicitud2.php" method="post">
Producto: 
    <input type="text" name="producto" id=""><br>
Cantidad:
    <input type="number" name="cantidad" id="" min=1 value=1><br>
    <input type="submit" value="Agregar producto">
</form>
<h2>Productos solicitados</h2>
<table>
    <thead>
    <tr><th>Producto</th><th>Cantidad</th></tr>
    </thead>
    <?php
        $registros=$conexion->query("select p.nombre as nombre, cantidad
        from detallepedidostemp as t inner join productos as p
        on t.idProducto=p.idProducto
        where t.idUsuario=$_SESSION[id]
        order by idDetalleTemp")
        or die("Problemas en el select:".mysqli_error($conexion));
        //if para eviatar que aparezca cabecera la primera vez que se ejecuta
        while ($reg=mysqli_fetch_array($registros)){
            echo"<tr><td>".$reg['nombre']."</td>";
            echo"<td>".$reg['cantidad']."</td></tr>";
        }
        mysqli_close($conexion);
    ?>
</table>
<form action="crearSolicitud3.php" method="post">
    <input type="submit" value="Enviar Solicitud">
</form>
</body>
</html>