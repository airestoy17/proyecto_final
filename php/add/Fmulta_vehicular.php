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
    <form action="Imulta_vehicular.php" id="form">
        <label for="folio">Folio</label>
        <input type="text" name="folio" id="folio">
        <br>
        <label for="agente">Agente</label>
        <input type="text" name="agente" id="agente">
        <br>
        <label for="clave">Clave Agente</label>
        <input type="text" name="clave" id="clave">
        <br>
        <label for="motivo">Motivo</label>
        <input type="text" name="motivo" id="motivo">
        <br>
        <label for="fundamento">Fundamento</label>
        <input type="text" name="fundamento" id="fundamento">
        <br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha">
        <br>
        <label for="fecha">Hora</label>
        <input type="time" name="hora" id="hora">
        <br>
        <label for="lugar">Lugar</label>
        <input type="text" name="lugar" id="lugar">
        <br>
        <label for="entidad">Garantia</label>
        <input type="text" name="garantia" id="garantia">
        <br>
        <label for="entidad">Propetiario</label>
        <input type="text" name="propetiario" id="propetiario">
        <br>
        <label for="entidad">Conductor</label>
        <input type="text" name="conductor" id="conductor">
        <br>
        <label for="entidad">Entidad</label>
        <input type="text" name="entidad" id="entidad">
        <br>
        <label for="numLicencia">NumLicencia</label>
        <input type="text" name="numLicencia" id="numLicencia">
        <br>
        <label for="id">ID de vehículo</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="folioCirculacion">Folio Tarjeta de Circulación</label>
        <input type="text" name="folioCirculacion" id="folioCirculacion">
        <br>
        <button type="submit">Subir</button>
    </form>
  </body>
</html>