<?php
$NumLicencia = $_GET['numLicencia'];
$Tipo = $_GET['tipo'];
$FechaExp = $_GET['fechaExp'];
$Restriccion = $_GET['restriccion'];
$ID = $_GET['idConductor'];
$vigencia = $_GET['vigencia'];

print("Licencia: " . $NumLicencia . "</br>");
print("Tipo: " . $Tipo . "</br>");
print("Fecha Exp:" . $FechaExp . "</br>");
print("Restricción:" . $Restriccion . "</br>");
print("ID:" . $ID . "</br>");

$intervalo = strval($vigencia) . " years";
$date = date_create($FechaExp);
$FechaVen = date('Y-m-d', strtotime($FechaExp. " + $vigencia years"));

include("Conexion.php");
$Con = Conectar();
//$SQL="INSERT INTO Licencias VALUES ('$NumLicencia', '$Tipo','$FechaExp','$FechaVen','$Restriccion','$ID')";
$SQL = "INSERT INTO Licencias VALUES ('$NumLicencia','$Tipo','$FechaExp','$FechaVen','$Restriccion','$ID')";
print($SQL);
$Result = Ejecutar($Con, $SQL);
print("\nResult: " . $Result);
Desconectar($Con);

print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=/proyecto_final/php/see/CIlicencias.php">');
