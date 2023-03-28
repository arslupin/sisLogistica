<?php
include "conexion.php";
session_start();
$id=$_POST["idP"];
$nom=$_POST["nombre"];
$des=$_POST["descripcion"];
$est=$_POST["estado"];
$can=$_POST["cantidad"];
$conexion->query("update productos set nombre='$nom',descripcion='$des',estado='$est',stock=$can where idProducto=$id");
$_SESSION["editado"]=1;
header("Location: listaMateriales.php");
?>

