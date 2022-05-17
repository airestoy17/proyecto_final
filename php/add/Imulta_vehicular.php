<?php
$Folio = $_GET['folio'];
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

print("Folio" . $Folio."</br>");
print("Agente" . $Agente."</br>");
print("Clave" . $Clave."</br>");
print("Motivo" . $Motivo."</br>");
print("Fundamento" . $Fundamento."</br>");
print("Fecha" . $Fecha."</br>");
print("Hora" . $Hora."</br>");
print("Lugar" . $Lugar."</br>");
print("Entidad" . $Entidad."</br>");
print("NumLicencia" . $NumLicencia."</br>");
print("ID" . $IdVehiculo."</br>");
print("FolioCirculacion" . $FolioCirculacion."</br>");

include("Conexion.php");
$Con = Conectar();
$SQL = "INSERT INTO `Multas`(`Folio`, `ClaveAgente`, `Motivo`, `Fundamento`, `Fecha`, 
        `Hora`, `Lugar`, `Conductor`, `Entidad`, `Garantia`, `Agente`, `Propietario`, 
        `IdVehiculo`, `NumLicencia`, `FolioTarjeta`) VALUES ('$Folio','$Clave',
        '$Motivo','$Fundamento','$Fecha','$Hora','$Lugar','$Conductor',
        '$Entidad','$Garantia','$Agente','$Propietario','$IdVehiculo','$NumLicencia',
        '$FolioCirculacion')";
$Result = Ejecutar($Con, $SQL);
print("\nResult: " . $Result);
Desconectar($Con);