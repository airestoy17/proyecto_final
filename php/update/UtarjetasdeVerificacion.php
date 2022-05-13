<?php
// Datos
$Folio = $_REQUEST['FolioCertificado'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM TarjetasdeVerificacion WHERE FolioCertificado = '$Folio'";
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
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <form action="UtarjetasdeVerificacion.php" id="form" method="get">
        <h1>Actualizar Tarjeta de Verificacion</h1>
        <label for="folioCertificado">Folio Certificado</label>
        <input type="text" name="folioCertificado" id="folioCertificado" />
        <br>
        <label for="tipoServicio">Tipo Servicio</label>
        <input type="text" name="tipoServicio" id="tipoServicio" value='<?php print($Fila[12]); ?>'/>
        <br>
        <label for="entidad">Entidad</label>
        <input type="text" name="entidad" id="entidad" value='<?php print($Fila[3]); ?>'/>
        <br>
        <label for="municipio">Municipio</label>
        <input type="text" name="municipio" id="municipio" value='<?php print($Fila[4]); ?>'/>
        <br>
        <label for="numLineaVerifiacion">Número Linea Verifiación</label>
        <input type="text" name="numLineaVerifiacion" id="numLineaVerifiacion" value='<?php print($Fila[6]); ?>'/>
        <br>
        <label for="tecnicoVerificador">Técnico Verificador</label>
        <input type="text" name="tecnicoVerificador" id="tecnicoVerificador" value='<?php print($Fila[7]); ?>'/>
        <br>
        <label for="fechaExp">Fecha Exp</label>
        <input type="date" name="fechaExp" id="fechaExp" value='<?php print($Fila[8]); ?>'/>
        <br>
        <label for="horaSalida">Hora Salida</label>
        <input type="time" name="horaSalida" id="horaSalida" value='<?php print($Fila[10]); ?>'/>
        <br>
        <label for="motivo">Motivo</label>
        <input type="text" name="motivo" id="motivo" value='<?php print($Fila[11]); ?>'/>
        <br>
        <label for="semestre">Semestre</label>
        <input type="number" name="semestre" id="semestre" value='<?php print($Fila[13]); ?>'/>
        <br>
        <label for="vigencia">Vigencia</label>
        <input type="date" name="vigencia" id="vigencia" value='<?php print($Fila[14]); ?>'/>
        <br>
        <label for="idVehiculo">Id Vehiculo</label>
        <input type="text" name="idVehiculo" id="idVehiculo" value='<?php print($Fila[15]); ?>'/>
        <br>
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa" value='<?php print($Fila[1]); ?>'/>
        <br>
        <label for="numCentro">numCentro</label>
        <input type="text" name="numCentro" id="numCentro" value='<?php print($Fila[5]); ?>'/>
        <br>
        <label for="tipoCarroceria">Tipo de carrocería</label>
        <input type="text" name="tipoCarroceria" id="tipoCarroceria" value='<?php print($Fila[2]); ?>'/>
        <br>
        <label for="horaEntrada">Hora entrada</label>
        <input type="time" name="horaEntrada" id="horaEntrada" value='<?php print($Fila[9]); ?>'/>
        <br>
        <button type="submit">Subir</button>
    </form>
</body>

</html>

<?php
if (isset($_GET['entidad'])) {
    $tipoServicio = $_REQUEST['tipoServicio'];
    $entidad = $_REQUEST['entidad'];
    $municipio = $_REQUEST['municipio'];
    $numLineaVerifiacion = $_REQUEST['numLineaVerifiacion'];
    $tecnicoVerificador = $_REQUEST['tecnicoVerificador'];
    $fechaExp = $_REQUEST['fechaExp'];
    $horaSalida = $_REQUEST['horaSalida'];
    $motivo = $_REQUEST['motivo'];
    $folioCertificado = $_REQUEST['folioCertificado'];
    $semestre = $_REQUEST['semestre'];
    $vigencia = $_REQUEST['vigencia'];
    $idVehiculo = $_REQUEST['idVehiculo'];
    $placa = $_REQUEST['placa'];
    $tipoCarroceria = $_REQUEST['tipoCarroceria'];
    $numCentro = $_REQUEST['numCentro'];
    $horaEntrada = $_REQUEST['horaEntrada'];

    $Con = Conectar();
    $SQL = "UPDATE `TarjetasdeVerificacion` SET `FolioCertificado`='$folioCertificado',`Placa`='$placa',
           `TipoCarroceria`='$tipoCarroceria',`Entidad`='$entidad',`Municipio`='$municipio',`NumCentro`='$numCentro',
           `NumLineaVerificacion`='$numLineaVerifiacion',`TenicoVerificador`='$tecnicoVerificador',`FechaExp`='$fechaExp',
           `HoraEntrada`='$horaEntrada',`HoraSalida`='$horaSalida',`Motivo`='$motivo',
           `TipoServicio`='$tipoServicio',`Semestre`='$semestre',`Vigencia`='$vigencia',
           `IdVehiculo`='$idVehiculo' 
           WHERE FolioCertificado = '$folioCertificado'";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>