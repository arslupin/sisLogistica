<?php
    include_once "conexion.php";
    session_start();
    $usu=$_SESSION["id"];
    $pro=$_REQUEST["producto"];
    $can=$_REQUEST["cantidad"];

    if($conexion->query("insert into detallepedidostemp(idUsuario,idProducto,cantidad) values($usu,$pro,$can)")){
        header('Location: detalleSolicitud.php');
    }else{
?>
<html>
<head>
    <title>Sistema Logistica UAP</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
</head>
<body>
<p>Ocurrio un error</p>
<a href="detalleSolicitud2.php">Volver</a>
</body>
</html>        
<?php
    }
?>
