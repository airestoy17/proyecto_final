<?php
# Subir datos para busqueda 
$id = $_GET['ID'];

# Datos para busqueda
include("Conexion.php");
include("Crear_tabla.php");
$Con = Conectar();
$SQL = "SELECT * FROM Propietarios WHERE Id = $id";
$Result = Ejecutar($Con, $SQL);
crear_tabla($Result);