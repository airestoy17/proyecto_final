<?php
// Datos
$Id = $_REQUEST['Id'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Conductores WHERE Id = '$Id'";
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
    <title>Actualizar Conductor</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <form method="get" id="form" action="Uconductores.php">
        <h1>Actualizar Conductor</h1>
        <label for="Id">Id</label>
        <input type="text" name="Id" id="Id" value='<?php print($Fila[0]); ?>' />
        <br />
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value='<?php print($Fila[3]); ?>' />
        <br />
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" value='<?php print($Fila[4]); ?>' />
        <br />
        <label for="domicilio">Domicilio</label>
        <input type="text" name="domicilio" id="domicilio" value='<?php print($Fila[1]); ?>' />
        <br />
        <label for="grupoSangre">Grupo sanguíneo</label>
        <input list="sangres" name="grupoSangre" id="grupoSangre" value='<?php print($Fila[2]); ?>' />
        <datalist id="sangres">
            <option value="A+"></option>
            <option value="A-"></option>
            <option value="B+"></option>
            <option value="B-"></option>
            <option value="AB+"></option>
            <option value="AB-"></option>
            <option value="O-"></option>
            <option value="O+"></option>
        </datalist>
        <br />
        <label for="firma">Firma</label>
        <input type="text" name="firma" id="firma" value='<?php print($Fila[5]); ?>' />
        <br />
        <label for="foto">Foto</label>
        <input type="text" name="foto" id="foto" value='<?php print($Fila[6]); ?>' />
        <br />
        <label for="donador">¿Es donador de orgános?</label>
        <input type="text" name="donador" id="donador" value='<?php print($Fila[7]); ?>' />
        <br />
        <label for="antiguedad">Antigüedad</label>
        <input type="number" name="antiguedad" id="antiguedad" value='<?php print($Fila[8]); ?>' />
        <br />
        <button type="submit">Subir</button>
    </form>
</body>

</html>

<?php
if (isset($_GET['nombre'])) {
    $Id = $_REQUEST['Id'];
    $nombre = $_GET['nombre'];
    $domicilio = $_GET['domicilio'];
    $grupoSangre = $_GET['grupoSangre'];
    $firma = $_GET['firma'];
    $foto = $_GET['foto'];
    $donador = $_GET['donador'];
    $antiguedad = $_GET['antiguedad'];
    $fechaNacimiento = $_GET['fechaNacimiento'];

    if ($donador == 'on') {
        $donador = 1;
    } else {
        $donador = 0;
    }

    $Con = Conectar();
    $SQL = "UPDATE `Conductores` SET `Domicilio`='$domicilio',
            `GrupoSanguineo`='$grupoSangre',`Nombre`='$nombre',`FechaNacimiento`='$fechaNacimiento',
            `Firma`='$firma', `Foto`='$foto',`Donador`='$donador',`Antigüedad`='$antiguedad' 
            WHERE `Id` = $Id";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>