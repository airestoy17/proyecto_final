<?php
include("Conexion.php");
include("Crear_tabla.php");
$Con = Conectar();
$SQL = "SELECT * FROM Vehiculos";
$Result = Ejecutar($Con, $SQL);
crear_tabla($Result);