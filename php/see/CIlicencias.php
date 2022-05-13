<?php
# Subir datos para busqueda 
$id = $_REQUEST['numLicencia'];

# Datos para busqueda
include("Conexion.php");
include("Crear_tabla.php");
$Con = Conectar();
$SQL = "SELECT * FROM Licencias WHERE NumLicencia = $id";
$Result = Ejecutar($Con, $SQL);
crear_tabla($Result);