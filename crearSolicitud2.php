<?php
    include_once "conexion.php";
    session_start();
    $_SESSION["fech"]=$_REQUEST["fecha"];
    $_SESSION["area"]=$_REQUEST["area"];
    $_SESSION["moti"]=$_REQUEST["motivo"];
    $conexion->query("delete from detallepedidostemp where idUsuario=$_SESSION[id]");
    header('Location: detalleSolicitud.php');
?>
