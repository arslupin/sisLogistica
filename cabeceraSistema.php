<?php
session_start();if(!isset($_SESSION["id"]))header("Location: index.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Logistica UAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css"> -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  </head>
  <body>
<!--
  <nav>
    <ul>
        <li><a href=miPerfil.php>
        <?php
            //echo $_SESSION["nom"]." ".$_SESSION["ape"];
        ?>
        </a></li>
        <li><a href="principal.php">Inicio</a></li>
        <li><a href="#">Estado Solicitudes</a></li>
        <li style="float:right"><a class="active" href="cerrarSesion.php">Cerrar Sesion</a></li>
    </ul>
    </nav>
-->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <?php
      echo $_SESSION["nom"]." ".$_SESSION["ape"];
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="principal.php">Inicio</a>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="#">Personal</a>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="#">Materiales</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Solicitudes</a>
        </li>
        <div class="nav-item ms-auto">
        <a class="nav-link" href="cerrarSesion.php">Cerrar Sesion</a>
      </div>
      </ul>
    </div>

  </div>
</nav>

