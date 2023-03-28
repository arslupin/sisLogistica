<?php
include_once 'cabeceraSistema.php';
include_once 'conexion.php';
$_SESSION['pedido']=$_GET['ped'];
?>
<h2>Revision de solicitud</h2>
<form action="respuestaSolicitud.php" method="post">
Respuesta:<br>
<textarea name="respuesta" id="" cols="40" rows="5"></textarea><br><br>
<table border=1>
    <thead>
    <tr><th>Material</th><th>Cantidad Solicitada</th><th>Cantidad Aceptada</th></tr>
    </thead>
    <?php
        $registros=$conexion->query("select p.nombre as nombre, cantidad, idDetalle
        from detallepedidos as d inner join productos as p
        on d.idProducto=p.idProducto
        where d.idPedido=$_GET[ped]
        order by idDetalle")
        or die("Problemas en el select:".mysqli_error($conexion));
        
        while ($reg=mysqli_fetch_array($registros)){
            echo "<tr>";
            echo "<input type='hidden' value=$reg[idDetalle] name=detalle[]>";
            echo "<td>".$reg['nombre']."</td>";
            echo "<td>".$reg['cantidad']."</td>";
            echo "<td><input type='number' name='obtenida[]' min=0 max=$reg[cantidad] value=$reg[cantidad]></td>";
            echo "</tr>";
            //$nu++;
        }
        mysqli_close($conexion);
    ?>
</table>
<input type="submit" value="Responder Solicitud">
</form>
</body>
</html>