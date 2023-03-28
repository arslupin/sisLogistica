<?php
if ($_SESSION['car']=="J") {
    echo '<a href="listaMateriales.php">Lista de Materiales</a><br>';
    echo '<a href="verSolicitudes.php">Lista de Solicitudes</a><br>';
    echo '<a href="nuevoMaterial.php">Agregar material</a>';
} elseif($_SESSION['car']=="E"){
    echo '<a href="listaDisponibles.php">Lista de Materiales</a><br>';
    echo '<a href="crearSolicitud.php">Crear Solicitud</a><br>';
    echo '<a href="misSolicitudes.php">Mis Solicitudes</a><br>';
}  
?>