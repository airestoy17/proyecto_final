<?php
$Llave=$_POST['ID'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE Conductores FROM WHERE Id=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);