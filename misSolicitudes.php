<?php
include_once 'cabeceraSistema.php';
include_once "conexion.php";

$sql="select * from pedidos where idUsuario=$_SESSION[id]";

$registros=mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
echo "<h2>Mis Solicitudes</h2>";
echo '<table class="tablalistado" border="1">';
echo '<tr><th>Codigo Pedido</th><th>Fecha envio</th><th>Motivo</th><th>Estado</th><th>Respuesta</th><th>Accion</th></tr>';
while ($reg=mysqli_fetch_array($registros)){
    echo '<tr>';
    echo "<td>".$reg['idPedido']."</td>";
    echo "<td>".$reg['fecha']."</td>";
    echo "<td>".$reg['motivo']."</td>";
    echo "<td>";
    $r=$reg['estado'];
    switch($r){
        case "S": echo "En espera"; break;
        case "R": echo "Rechazado"; break;
        case "A": echo "Aprobado"; break;
        case "E": echo "Entregado"; break;
    }
    echo "</td>";
    echo "<td>".$reg['respuesta']."</td>";

    echo "<td>";
    if ($r=="A") {
        echo "<a href='confirmarRecepcion.php?p=$reg[idPedido]'>Recibir</a>";
    } else {
        echo "Recibir";
    }
    echo "</td>";
    echo '</tr>';
}
echo '</table>';
mysqli_close($conexion);
/*
switch($r){
    case "S": echo "En espera"; break;
    case "R": echo "Rechazado"; break;
    case "A": echo "Aprobado"; break;
    case "E": echo "Entregado"; break;
    */
?>
</body>
</html>


