<?php
$Llave=$_REQUEST['FolioCertificado'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE FROM TarjetasdeVerificacion WHERE FolioCertificado=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);
header("Location: /proyecto_final/php/see/CItarjeta_verificacion.php");