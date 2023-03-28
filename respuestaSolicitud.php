<?php
include_once 'conexion.php';
session_start();
$res=$_POST['respuesta'];
$cantidad=count($_POST['obtenida']);
for($i=0;$i<$cantidad;$i++){
    $deta=$_POST['detalle'][$i];
    $obte=$_POST['obtenida'][$i];
    $sql="UPDATE detallepedidos SET canAprobada=$obte WHERE idDetalle=$deta";
    $conexion->query($sql) or die("Problemas en el select:".mysqli_error($conexion));
}
$sql="update pedidos set estado='A',respuesta='$res' where idPedido=$_SESSION[pedido]";
$conexion->query($sql) or die("Problemas en el select:".mysqli_error($conexion));
$conexion->close();
unset($_SESSION['pedido']);
header('Location: verSolicitudes.php');
?>