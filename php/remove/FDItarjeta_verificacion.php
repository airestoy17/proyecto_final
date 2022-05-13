<?php
$Llave=$_POST['idVerifiacion'];
include('Conexion.php');
$Con = Conectar();
$SQL = "DELETE TarjetasdeVerificacion FROM WHERE FolioCertificado=$Llave";
$Result = Ejecutar($Con, $SQL);
$Registros_afectados = mysqli_affected_rows($Con);
print("Registros eliminados: ".$Registros_afectados);
Desconectar($Con);