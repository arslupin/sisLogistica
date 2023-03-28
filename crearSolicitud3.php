<?php
include "conexion.php";
session_start();
$fecha=$_SESSION["fech"];
$area=$_SESSION["area"];
$motivo=$_SESSION["moti"];
$usu=$_SESSION["id"];
$conexion->query("insert into pedidos(idUsuario,fecha,estado,motivo) values ($usu,'$fecha','S','$motivo')");
$pedido=$conexion->insert_id;
$resultados=$conexion->query("select idProducto,cantidad from detallepedidostemp where idUsuario=$usu");
while($reg=$resultados->fetch_object()){
    $pro=$reg->idProducto;
    $can=$reg->cantidad;
    $conexion->query("insert into detallepedidos(idPedido,idProducto,cantidad) values ($pedido,$pro,$can)");
}
$conexion->query("delete from detallepedidostemp where idUsuario=$usu");
header("Location: principal.php");
?>