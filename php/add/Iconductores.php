<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$domicilio = $_GET['domicilio'];
$grupoSangre = $_GET['grupoSangre'];
$firma = $_GET['firma'];
$foto = $_GET['foto'];
$donador = $_GET['donador'];
$antiguedad = $_GET['antiguedad'];
$fechaNacimiento = $_GET['fechaNacimiento'];

if ($donador == 'on') {
    $donador = 1;
} else {
    $donador = 0;
}


print("ID: " . $id . "</br>");
print("Nombre: " . $nombre . "</br>");
print("Domicilio: " . $domicilio . "</br>");
print("Grupo Sangre: " . $grupoSangre . "</br>");
print("Firma: " . $firma . "</br>");
print("Foto: " . $foto . "</br>");
print("Donador: " . $donador . "</br>");
print("Antiguedad: " . $antiguedad . "</br>");

include("Conexion.php");
$Con = Conectar();
//$SQL="INSERT INTO Licencias VALUES ('$NumLicencia', '$Tipo','$FechaExp','$FechaVen','$Restriccion','$ID')";
$SQL = "INSERT INTO `Conductores`(`Id`, `Domicilio`, `GrupoSanguineo`, `Nombre`, `FechaNacimiento`, `Firma`, `Foto`, `Donador`, `Antigüedad`) 
            VALUES ('$id','$domicilio','$grupoSangre','$nombre','$fechaNacimiento','$firma','$foto','$donador','$antiguedad')";
$Result = Ejecutar($Con, $SQL);
echo $Result;
