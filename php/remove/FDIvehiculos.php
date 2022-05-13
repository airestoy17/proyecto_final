<?php
$Llave=$_POST['idVehiculo'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE Vehiculos FROM WHERE Id=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);