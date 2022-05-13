<?php
// Datos
$NumLicencia = $_REQUEST['NumLicencia'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Licencias WHERE NumLicencia = '$NumLicencia'";
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
  <title>Update Licencias</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <h1>Licencias Update</h1>
  <form method="get" id="form" action="Ulicencias.php">
    <label for="NumLicencia">Numero Licencia</label>
    <input type="text" name="NumLicencia" id="NumLicencia" value='<?php print($Fila[0]); ?>' />
    <br />
    <label for="Tipo">Tipo</label>
    <input type="text" name="tipo" id="tipo" value='<?php print($Fila[1]); ?>' />
    <br />
    <label for="fechaExp">Fecha de expedición</label>
    <input type="date" name="fechaExp" id="fechaVen" value='<?php print($Fila[2]); ?>' />
    <br />
    <label for="fechaVen">Fecha de Vencimiento</label>
    <input type="date" name="fechaVen" id="fechaVen" value='<?php print($Fila[3]); ?>' />
    <br />
    <label for="restriccion">Restricción</label>
    <input type="text" name="restriccion" id="restriccion" value='<?php print($Fila[4]); ?>' />
    <br />
    <label for="idConductor">Id de Conductor</label>
    <input type="text" name="idConductor" id="idConductor" value='<?php print($Fila[5]); ?>' />
    <br />
    <button type="submit">Subir</button>
  </form>
</body>

</html>

<?php
if (isset($_GET['tipo'])) {
  $NumLicencia = $_REQUEST['NumLicencia'];
  $Tipo = $_GET['tipo'];
  $FechaExp = $_GET['fechaExp'];
  $FechaVen = $_GET['fechaVen'];
  $Restriccion = $_GET['restriccion'];
  $idConductor = $_GET['idConductor'];

  $Con = Conectar();
  $SQL = "UPDATE Licencias SET Tipo = '$Tipo', FechaExp = '$FechaExp', FechaVencimiento = '$FechaVen',
          Restriccion = '$Restriccion', IdConductor = '$idConductor' WHERE numLicencia = '$NumLicencia'";
  $Result = Ejecutar($Con, $SQL);
  print("Registros actualizados = " . mysqli_affected_rows($Con));
  Desconectar($Con);
}
?>