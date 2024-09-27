<?php

# Conseguir datos que no son archivos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$domicilio = $_POST['domicilio'];
$grupoSangre = $_POST['grupoSangre'];
$firma = $_FILES['firma'];
$foto = $_FILES['foto'];
$donador = $_POST['donador'];
$antiguedad = $_POST['antiguedad'];
$fechaNacimiento = $_POST['fechaNacimiento'];
echo exec('whoami');



if ($donador == 'on') {
    $donador = 1;
} else {
    $donador = 0;
}

# Conseguir imagénes para firmas y foto del conductor
include('../files/upload_file.php');
$resultadoFirma = manejarArchivoImagen($firma, 'firmas');
$resultadoFoto =  manejarArchivoImagen($foto, 'fotos');

if ($resultadoFirma != '' && $resultadoFoto != '') {
    include("Conexion.php");
    $Con = Conectar();
    //$SQL="INSERT INTO Licencias VALUES ('$NumLicencia', '$Tipo','$FechaExp','$FechaVen','$Restriccion','$ID')";
    $SQL = "INSERT INTO `Conductores`(`Id`, `Domicilio`, `GrupoSanguineo`, `Nombre`, `FechaNacimiento`, `Firma`, `Foto`, `Donador`, `Antigüedad`) 
            VALUES ('$id','$domicilio','$grupoSangre','$nombre','$fechaNacimiento','$resultadoFirma','$resultadoFoto','$donador','$antiguedad')";
    $Result = Ejecutar($Con, $SQL);
    echo $Result;
} else {
    echo 'Error';
}

print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=/./proyecto_final/see/CIconductores.php">');
