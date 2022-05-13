<?php
// Datos
$id = $_REQUEST['Id'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Propietarios WHERE Id = '$id'";
$Result = Ejecutar($Con, $SQL);
$Fila = mysqli_fetch_row($Result);
Desconectar($Con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Licencias</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <h1>Actualizar Propietario</h1>
    <form method="get" id="form" action="Upropietarios.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value='<?php print($Fila[1]); ?>'/>
        <br />
        <label for="municipio">Municipio</label>
        <input type="text" name="municipio" id="municipio" value='<?php print($Fila[2]); ?>'/>
        <br />
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="localidad" value='<?php print($Fila[3]); ?>'/>
        <br />
        <label for="RFC">RFC</label>
        <input type="text" name="RFC" id="RFC" value='<?php print($Fila[4]); ?>'/>
        <br />
        <button type="submit">Subir</button>
    </form>
</body>

</html>

<?php
if (isset($_GET['idPropietario'])) {
    $id = $_REQUEST['Id'];
    $nombre = $_GET['nombre'];
    $municipio = $_GET['municipio'];
    $localidad = $_GET['localidad'];
    $rfc = $_GET['RFC'];

    $Con = Conectar();
    $SQL = "UPDATE `Propietarios` SET `Id`='$id',`RFC`='$rfc',
            `Municipio`='$municipio', `Localidad`='$localidad',`Nombre`='$nombre' 
            WHERE 1";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>