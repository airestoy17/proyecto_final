<?php
$Llave=$_POST['folio'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE multas FROM WHERE Folio=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);