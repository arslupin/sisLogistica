<?php
include_once 'cabeceraSistema.php';
?>
    <h1>Nueva Solicitud</h1>
    <form action="crearSolicitud2.php" method="post">
        Fecha de envio:<br>
        <input type="text" name="fecha" id="" value="<?php echo date("d-m-Y");?>"><br>
        Area:<br>
        <input type="text" name="area" id="" value="<?php echo $_SESSION["are"];?>"><br>
        Motivo:<br>
        <textarea name="motivo" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Escoger productos">
    </form>
</body>
</html>