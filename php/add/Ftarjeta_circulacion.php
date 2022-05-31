<?php
session_start();
if (isset($_SESSION['Bandera'])) {
} else {
    print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=/proyecto_final/index.php">');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <form method="post" id="form" action="Itarjeta_circulacion.php">
        <label for="folio">Folio</label>
        <input type="text" name="folio" id="folio">
        <br>
        <label for="uso">Uso</label>
        <input type="text" name="uso" id="uso">
        <br>
        <label for="operacion">Operación</label>
        <input type="text" name="operacion" id="operacion">
        <br>
        <label for="oficinaExp">Oficina de expedición</label>
        <input type="text" name="oficinaExp" id="oficinaExp">
        <br>
        <label for="nci">NCI</label>
        <input type="text" name="nci" id="nci">
        <br>
        <label for="idVehiculo">ID de vehículo</label>
        <input type="text" name="idVehiculo" id="idVehiculo">
        <br>
        <label for="idPropietario">ID de Propietario</label>
        <input type="text" name="idPropietario" id="idPropietario">
        <br>
        <label for="fechaExp">Fecha de Expedición</label>
        <input type="date" name="fechaExp" id="fechaExp">
        <br>
        <button type="submit">Subir</button>
    </form>
  </body>
</html>