<?php
include_once 'cabeceraSistema.php';
include_once "conexion.php";
$registros=mysqli_query($conexion,"select p.idPedido,a.nombre,fecha,estado,motivo 
    from pedidos as p 
    inner join usuarios as u on p.idUsuario=u.idUsuario
    inner join areas as a on u.idArea=a.idArea
    order by idPedido")
    or die(mysqli_error($conexion));
echo "<h1>Lista de solicitudes</h1>";
echo '<table class="tablalistado" border="1">';
echo '<tr><th>Usuario</th><th>Fecha</th><th>Estado</th><th>Motivo</th><th>Revisar</th></tr>';
while ($reg=mysqli_fetch_array($registros)){
    echo '<tr>';
    echo "<td>".$reg['nombre']."</td>";
    echo "<td>".$reg['fecha']."</td>";
    echo "<td>";
    $r=$reg['estado'];
    switch($r){
        case "S": echo "En espera"; break;
        case "R": echo "Rechazado"; break;
        case "A": echo "Aprobado"; break;
        case "E": echo "Entregado"; break;
    }
    echo "</td>";
    echo"<td>".$reg['motivo']."</td>";
    echo"<td>"."<a href='revisarSolicitud.php?ped=$reg[idPedido]'>Revisar</a>"."</td>";
    echo '</tr>';
}
echo '</table>';
mysqli_close($conexion);
?>
</body>
</html>