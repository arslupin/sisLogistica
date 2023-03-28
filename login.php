<?php
    include "conexion.php";
    session_start();
    $email=$_REQUEST["mail"];
    $pass=$_REQUEST["pass"];
    $sql=$conexion->query("select * from usuarios where clave='$pass' and email='$email'");
    if ($datos=$sql->fetch_object()) {
        $_SESSION["id"]=$datos->idUsuario;
        $_SESSION["nom"]=$datos->nombre;
        $_SESSION["ape"]=$datos->apellido;
        $_SESSION["car"]=$datos->cargo;
        $_SESSION["are"]=$datos->idArea;
        header('Location: principal.php');
    } else {
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
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  </head>
  <body>
    <br><br>
    <div class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Sistema Logistica</h5>
        <h6 class="card-subtitle mb-2 text-muted">No se pudo loguear</h6>
        <p class="card-text">Los datos ingresados son incorrectos</p>
        <a href="index.php" class="card-link">Reintentar</a>
        <a href="recuperarContrasena.php" class="card-link">Olvide mi contraseña</a>
    </div>
    </div>

</body>
</html>        
<?php
    }
?>
