<?php
// Datos
$Folio = $_REQUEST['Id'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Vehiculos WHERE Id = '$Folio'";
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
    <form action="Ivehiculos.php" id="form" method="post">
        <label for="Id">ID Vehiculo</label>
        <input type="text" name="Id" id="Id" value='<?php print($Fila[0]); ?>'>
        <br>
        <label for="origen">Origen</label>
        <input type="text" name="origen" id="origen" value='<?php print($Fila[14]); ?>'>
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value='<?php print($Fila[1]); ?>'>
        <br>
        <label for="cilindraje">Cilindraje</label>
        <input type="text" name="cilindraje" id="cilindraje" value='<?php print($Fila[2]); ?>'>
        <br>
        <label for="capacidad">Capacidad</label>
        <input type="text" name="capacidad" id="capacidad" value='<?php print($Fila[3]); ?>'>
        <br>
        <label for="puertas">Puertas</label>
        <input type="text" name="puertas" id="puertas" value='<?php print($Fila[4]); ?>'>
        <br>
        <label for="asientos">Asientos</label>
        <input type="text" name="asientos" id="asientos" value='<?php print($Fila[5]); ?>'>
        <br>
        <label for="combustible">Combustible</label>
        <input type="text" name="combustible" id="combustible" value='<?php print($Fila[6]); ?>'>
        <br>
        <label for="transmision">Transmision</label>
        <input type="text" name="transmision" id="transmision" value='<?php print($Fila[7]); ?>'>
        <br>
        <label for="clase">Clase</label>
        <input type="text" name="clase" id="clase" value='<?php print($Fila[8]); ?>'>
        <br>
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" value='<?php print($Fila[9]); ?>'>
        <br>
        <label for="rfa">Rfa</label>
        <input type="text" name="rfa" id="rfa" value='<?php print($Fila[10]); ?>'>
        <br>
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" value='<?php print($Fila[11]); ?>'>
        <br>
        <label for="numMotor">Número Motor</label>
        <input type="text" name="numMotor" id="numMotor" value='<?php print($Fila[12]); ?>'>
        <br>
        <label for="codigoVehicular">Código Vehicular</label>
        <input type="text" name="codigoVehicular" id="codigoVehicular" value='<?php print($Fila[19]); ?>'>
        <br>
        <label for="numSerie">NumSerie</label>
        <input type="text" name="numSerie" id="numSerie" value='<?php print($Fila[15]); ?>'>
        <br>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value='<?php print($Fila[16]); ?>'>
        <br>
        <label for="submarca">Submarca</label>
        <input type="text" name="submarca" id="submarca" value='<?php print($Fila[17]); ?>'>
        <br>
        <label for="linea">Linea</label>
        <input type="text" name="linea" id="linea" value='<?php print($Fila[18]); ?>'>
        <br>
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa" value='<?php print($Fila[13]); ?>'>
        <br>
        <button type="submit">Subir</button>
    </form>
</body>

</html>

<?php
if (isset($_GET['origen'])) {
    $idVehiculo = $_REQUEST['Id'];
    $origen = $_REQUEST['origen'];
    $color = $_REQUEST['color'];
    $cilindraje = $_REQUEST['cilindraje'];
    $capacidad = $_REQUEST['capacidad'];
    $puertas = $_REQUEST['puertas'];
    $agente = $_REQUEST['agente'];
    $asientos = $_REQUEST['asientos'];
    $combustible = $_REQUEST['combustible'];
    $transmision = $_REQUEST['transmision'];
    $clase = $_REQUEST['clase'];
    $tipo = $_REQUEST['tipo'];
    $rfa = $_REQUEST['rfa'];
    $modelo = $_REQUEST['modelo'];
    $numMotor = $_REQUEST['numMotor'];
    $codigoVehicular = $_REQUEST['codigoVehicular'];
    $numSerie = $_REQUEST['numSerie'];
    $marca = $_REQUEST['marca'];
    $submarca = $_REQUEST['submarca'];
    $linea = $_REQUEST['linea'];
    $placa = $_REQUEST['placa'];

    $Con = Conectar();
    $SQL = "UPDATE `Vehiculos` SET `Color`='$color',
           `Cilindraje`='$cilindraje',`Capacidad`='$capacidad',`Puertas`='$puertas',
           `Asientos`='$asientos',`Combustible`='$combustible',`Transmision`='$transmision',
           `Clase`='$clase',`Tipo`='$tipo',`RFA`='$rfa',`Modelo`='$modelo',
           `numMotor`='$numMotor',`Placa`='$placa',`Origen`='$origen',`numSerie`='$numSerie'
           ,`Marca`='$marca',`Submarca`='$submarca',`Linea`='$linea',
           `CodigoVehicular`='$codigoVehicular' WHERE `Id`='$id'";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>