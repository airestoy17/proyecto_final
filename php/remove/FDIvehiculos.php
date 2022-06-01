<?php
session_start();
if (isset($_SESSION['Bandera']) && isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
    $Llave=$_REQUEST['Id'];
    include('Conexion.php');
    $Con = Conectar();
    $SQL = "DELETE FROM Vehiculos WHERE Id=$Llave";
    $Result = Ejecutar($Con, $SQL);
    $Registros_afectados = mysqli_affected_rows($Con);
    print("Registros eliminados: ".$Registros_afectados);
    Desconectar($Con);
    header("Location: /proyecto_final/php/see/CIvehiculos.php");
} else {
    print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=/proyecto_final/index.php">');
}