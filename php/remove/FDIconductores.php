<?php
$Llave=$_REQUEST['Id'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE FROM Conductores WHERE Id=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);
header("Location: /proyecto_final/php/see/CIconductores.php");