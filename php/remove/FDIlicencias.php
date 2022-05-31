<?php
$Llave=$_REQUEST['NumLicencia'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE FROM Licencias WHERE NumLicencia=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);
header("Location: /proyecto_final/php/see/CIlicencias.php");