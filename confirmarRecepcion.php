<?php
include_once 'cabeceraSistema.php';
include_once 'conexion.php';
$idUsu=$_SESSION['id'];
$idPed=$_GET['p'];
?>
<h2>Revision de solicitud</h2>

<table border=1>
    <thead>
    <tr><th>Material</th><th>Cantidad Solicitada</th><th>Cantidad Aceptada</th></tr>
    </thead>
    <?php
        $registros=$conexion->query("select p.nombre as nombre, cantidad,canAprobada, idDetalle
        from detallepedidos as d inner join productos as p
        on d.idProducto=p.idProducto
        where d.idPedido=$idPed
        order by idDetalle")
        or die("Problemas en el select:".mysqli_error($conexion));
        
        while ($reg=mysqli_fetch_array($registros)){
            echo "<tr>";
            echo "<input type='hidden' value=$reg[idDetalle] name=detalle[]>";
            echo "<td>".$reg['nombre']."</td>";
            echo "<td>".$reg['cantidad']."</td>";
            echo "<td>".$reg['canAprobada']."</td>";
            echo "</tr>";
        }
        mysqli_close($conexion);
    ?>
</table>
<br>
<input type="submit" value="Confirmar Recepcion">
</form>
</body>
</html>