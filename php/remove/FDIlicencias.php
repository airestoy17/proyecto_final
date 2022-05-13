<?php
$Llave=$_POST['numLicencia'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE licencias FROM WHERE NumLicencia=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);