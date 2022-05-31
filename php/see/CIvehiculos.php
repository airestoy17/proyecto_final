<?php
session_start();
if (isset($_SESSION['Bandera'])) {
    include("Conexion.php");
} else {
    print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=/proyecto_final/index.php">');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de control vehicular</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include('../header.php') ?>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6">
                <h1 class="mb-4 mt-4">Vehiculos</h1>
            </div>
            <div class="col-lg-6">
                <form action="./CIvehiculos.php">
                    <div class="row">
                        <?php
                            include('CIbuscar.php');
                            $SQL = "SELECT * FROM Vehiculos";
                            if($_SESSION['Admin'] == 1){
                                print('
                                    <div class="col-lg-4">
                                        <a href="./../add/Fpropietario.php" class="btn btn-primary float-right mb-4 mt-4">Añadir tarjeta</a>
                                    </div>
                                ');
                                generar_buscar($SQL);
                            } else {
                                generar_buscar($SQL);
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                include("Crear_tabla.php");
                $Con = Conectar();
                $SQL = "SELECT * FROM Vehiculos";
                $Result = Ejecutar($Con, $SQL);
                crear_tabla($Result);
                ?>
            </div>
        </div>
    </div>

</body>
</html>