<?php
// Datos
$Folio = $_REQUEST['Folio'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Multas WHERE Folio = '$Folio'";
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
    <form action="Umultas.php" id="form">
        <label for="Folio">Folio</label>
        <input type="text" name="Folio" id="Folio" value='<?php print($Fila[0]); ?>' >
        <br>
        <label for="agente">Agente</label>
        <input type="text" name="agente" id="agente" value='<?php print($Fila[10]); ?>'>
        <br>
        <label for="clave">Clave Agente</label>
        <input type="text" name="clave" id="clave" value='<?php print($Fila[1]); ?>'>
        <br>
        <label for="motivo">Motivo</label>
        <input type="text" name="motivo" id="motivo" value='<?php print($Fila[2]); ?>'>
        <br>
        <label for="fundamento">Fundamento</label>
        <input type="text" name="fundamento" id="fundamento" value='<?php print($Fila[3]); ?>'>
        <br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value='<?php print($Fila[4]); ?>'>
        <br>
        <label for="fecha">Hora</label>
        <input type="time" name="hora" id="hora" value='<?php print($Fila[5]); ?>'>
        <br>
        <label for="lugar">Lugar</label>
        <input type="text" name="lugar" id="lugar" value='<?php print($Fila[6]); ?>'>
        <br>
        <label for="entidad">Garantia</label>
        <input type="text" name="garantia" id="garantia" value='<?php print($Fila[9]); ?>'>
        <br>
        <label for="propietario">Propietario</label>
        <input type="text" name="propietario" id="propietario" value='<?php print($Fila[11]); ?>'>
        <br>
        <label for="entidad">Conductor</label>
        <input type="text" name="conductor" id="conductor" value='<?php print($Fila[7]); ?>'>
        <br>
        <label for="entidad">Entidad</label>
        <input type="text" name="entidad" id="entidad" value='<?php print($Fila[8]); ?>'>
        <br>
        <label for="numLicencia">NumLicencia</label>
        <input type="text" name="numLicencia" id="numLicencia" value='<?php print($Fila[13]); ?>'>
        <br>
        <label for="id">ID de vehículo</label>
        <input type="text" name="id" id="id" value='<?php print($Fila[12]); ?>'>
        <br>
        <label for="folioCirculacion">Folio Tarjeta de Circulación</label>
        <input type="text" name="folioCirculacion" id="folioCirculacion" value='<?php print($Fila[14]); ?>'>
        <br>
        <button type="submit">Subir</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['clave'])) {
    $Folio = $_REQUEST['Folio'];
    $Clave = $_GET['clave'];
    $Motivo = $_GET['motivo'];
    $Fundamento = $_GET['fundamento'];
    $Fecha = $_GET['fecha'];
    $Hora = $_GET['hora'];
    $Lugar = $_GET['lugar'];
    $Conductor = $_GET['conductor'];
    $Entidad = $_GET['entidad'];
    $Garantia = $_GET['garantia'];
    $Agente = $_GET['agente'];
    $NumLicencia = $_GET['numLicencia'];
    $IdVehiculo = $_GET['id'];
    $FolioCirculacion = $_GET['folioCirculacion'];
    $Propietario = $_GET['propietario'];

    $Con = Conectar();
    $SQL = "UPDATE `Multas` SET `Folio`='$Folio',`ClaveAgente`='$Clave',`Motivo`='$Motivo',
            `Fundamento`='$Fundamento',`Fecha`='$Fecha',`Hora`='$Hora',`Lugar`='$Lugar',
            `Conductor`='$Conductor',`Entidad`='$Entidad',`Garantia`='$Garantia',
            `Agente`='$Agente',`Propietario`='$Propietario',`IdVehiculo`='$IdVehiculo',
            `NumLicencia`='$NumLicencia',`FolioTarjeta`='$FolioCirculacion' 
            WHERE `Folio` = $Folio";
    $Result = Ejecutar($Con, $SQL);
    print("\nResult: " . $Result);
    Desconectar($Con);
}
