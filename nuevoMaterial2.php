<?php
include "conexion.php";
session_start();
$nom=$_POST["nombre"];
$des=$_POST["descripcion"];
$est=$_POST["estado"];
$can=$_POST["cantidad"];
$conexion->query("insert into productos(nombre,descripcion,estado,stock) values ('$nom','$des','$est',$can)");
$_SESSION["nuevo"]=1;
header("Location: nuevoMaterial.php");
?>