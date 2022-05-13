<?php
// Datos
$Folio = $_REQUEST['Folio'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM TarjetasDeCirculacion WHERE Folio = '$Folio'";
$Result = Ejecutar($Con, $SQL);
$Fila = mysqli_fetch_row($Result);
Desconectar($Con);
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
    <form method="get" id="form" action="UtarjetasDeCirculacion.php">
        <label for="Folio">Folio</label>
        <input type="text" name="Folio" id="fFolio" value='<?php print($Fila[0]); ?>'>
        <br>
        <label for="uso">Uso</label>
        <input type="text" name="uso" id="uso" value='<?php print($Fila[1]); ?>'>
        <br>
        <label for="operacion">Operación</label>
        <input type="text" name="operacion" id="operacion"value='<?php print($Fila[2]); ?>'>
        <br>
        <label for="oficinaExp">Oficina de expedición</label>
        <input type="text" name="oficinaExp" id="oficinaExp"value='<?php print($Fila[3]); ?>'>
        <br>
        <label for="nci">NCI</label>
        <input type="text" name="nci" id="nci"value='<?php print($Fila[4]); ?>'>
        <br>
        <label for="idVehiculo">ID de vehículo</label>
        <input type="text" name="idVehiculo" id="idVehiculo"value='<?php print($Fila[7]); ?>'>
        <br>
        <label for="idPropietario">ID de Propietario</label>
        <input type="text" name="idPropietario" id="idPropietario"value='<?php print($Fila[6]); ?>'>
        <br>
        <label for="fechaExp">Fecha de Expedición</label>
        <input type="date" name="fechaExp" id="fechaExp"value='<?php print($Fila[5]); ?>'>
        <br>
        <button type="submit">Subir</button>
    </form>
  </body>
</html>

<?php
if (isset($_GET['uso'])) {
    $folio = $_REQUEST['Folio'];
    $uso = $_REQUEST['uso'];
    $operacion = $_REQUEST['operacion'];
    $oficinaExp = $_REQUEST['oficinaExp'];
    $nci = $_REQUEST['nci'];
    $idVehiculo = $_REQUEST['idVehiculo'];
    $idPropietario = $_REQUEST['idPropietario'];
    $fechaExp = $_REQUEST['fechaExp'];

    $Con = Conectar();
    $SQL = "UPDATE `TarjetasDeCirculacion` SET `Uso`='$uso',
            `Operacion`='$operacion',`OficinaExp`='$oficinaExp',`NCI`='$nci',
            `FechaExp`='$fechaExp',`IdPropietario`='$idPropietario',`IdVehiculo`='$idVehiculo' 
            WHERE `Folio`='$folio'";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>