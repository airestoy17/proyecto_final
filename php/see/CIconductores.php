<?php
# Subir datos para busqueda 
$id = $_GET['id'];

# Datos para busqueda
include("Conexion.php");
include("Crear_tabla.php");
$Con = Conectar();
$SQL = "SELECT * FROM Conductores WHERE id = $id";
$Result = Ejecutar($Con, $SQL);
crear_tabla($Result);