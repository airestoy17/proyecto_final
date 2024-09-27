<?php
require('./fpdf.php');
include('./Conexion.php');

/* Conectar a la base de datos */
$licencia = 2;
$Con = Conectar();
$SQL = "SELECT V.*, TC.*, P.*, TV.Placa
FROM TarjetasdeVerificacion TV, Vehiculos V, TarjetasDeCirculacion TC, Propietarios P
WHERE TV.IdVehiculo = 1
AND V.Id = 1
AND TC.IdVehiculo = 1
AND P.Id = TC.IdPropietario;";
$Result = Ejecutar($Con, $SQL);
$Fila = mysqli_fetch_array($Result, MYSQLI_BOTH);

print_r($Fila);