<?php
# Subir datos para busqueda 
$id = $_GET['folio'];

# Datos para busqueda
include("Conexion.php");
include("Crear_tabla.php");
$Con = Conectar();
$SQL = "SELECT * FROM TarjetasdeVerificacion WHERE FolioCertificado = $id";
$Result = Ejecutar($Con, $SQL);
crear_tabla($Result);