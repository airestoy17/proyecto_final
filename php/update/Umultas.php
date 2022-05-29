<?php
// Datos
$Folio = $_REQUEST['Folio'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Multas WHERE Folio = '$Folio'";
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
    <title>Update Multas</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="d-block mx-auto mb-4" width="72" height="72" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
            </svg>
            <h2>Edite una multa</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Folio</h4>
                <form class="needs-validation" method="get" action="Ipropietario.php" novalidate>
                    <div class="mb-3">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control" id="folio" placeholder="" value="<?php print($Fila[1]); ?>" required />
                        <div class="invalid-feedback">Valid folio is required.</div>
                    </div>

                    <div class="mb-3">
                        <label for="clave">clave</label>
                        <input type="text" class="form-control" id="folio" placeholder="" value="<?php print($Fila[4]); ?>"/>
                        <div class="invalid-feedback">
                            Valid folio is required.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="motivo">Motivo</label>
                            <input type="text" class="form-control" id="motivo" placeholder="Querétaro" value="<?php print($Fila[2]); ?>"/>
                            <div class="invalid-feedback">
                                Valid Motivo is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="fundamento">Fundamento</label>
                            <input type="text" class="form-control" id="fundamento" placeholder="Milenio III" value="<?php print($Fila[3]); ?>"/>
                            <div class="invalid-feedback">
                                Valid Fundamento is required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" />
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                        Continue to checkout
                    </button>
                </form>
            </div>
        </div>

        

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; Sistema de control vehicular</p>
        </footer>
    </div>
<!--
    <form action="Umultas.php" id="form">
        <label for="Folio">Folio</label>
        <input type="text" name="Folio" id="Folio" value='<?php print($Fila[0]); ?>' >
        <br>
        <label for="agente">Agente</label>
        <input type="text" name="agente" id="agente" value='<?php print($Fila[10]); ?>'>
        <br>
        <label for="clave">Clave Agente</label>
        <input type="text" name="clave" id="clave" value='<?php print($Fila[1]); ?>'>
        <br>
        <label for="motivo">Motivo</label>
        <input type="text" name="motivo" id="motivo" value='<?php print($Fila[2]); ?>'>
        <br>
        <label for="fundamento">Fundamento</label>
        <input type="text" name="fundamento" id="fundamento" value='<?php print($Fila[3]); ?>'>
        <br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value='<?php print($Fila[4]); ?>'>
        <br>
        <label for="fecha">Hora</label>
        <input type="time" name="hora" id="hora" value='<?php print($Fila[5]); ?>'>
        <br>
        <label for="lugar">Lugar</label>
        <input type="text" name="lugar" id="lugar" value='<?php print($Fila[6]); ?>'>
        <br>
        <label for="entidad">Garantia</label>
        <input type="text" name="garantia" id="garantia" value='<?php print($Fila[9]); ?>'>
        <br>
        <label for="propietario">Propietario</label>
        <input type="text" name="propietario" id="propietario" value='<?php print($Fila[11]); ?>'>
        <br>
        <label for="entidad">Conductor</label>
        <input type="text" name="conductor" id="conductor" value='<?php print($Fila[7]); ?>'>
        <br>
        <label for="entidad">Entidad</label>
        <input type="text" name="entidad" id="entidad" value='<?php print($Fila[8]); ?>'>
        <br>
        <label for="numLicencia">NumLicencia</label>
        <input type="text" name="numLicencia" id="numLicencia" value='<?php print($Fila[13]); ?>'>
        <br>
        <label for="id">ID de vehículo</label>
        <input type="text" name="id" id="id" value='<?php print($Fila[12]); ?>'>
        <br>
        <label for="folioCirculacion">Folio Tarjeta de Circulación</label>
        <input type="text" name="folioCirculacion" id="folioCirculacion" value='<?php print($Fila[14]); ?>'>
        <br>
        <button type="submit">Subir</button>
    </form>
-->
</body>

</html>

<?php

if (isset($_GET['clave'])) {
    $Folio = $_REQUEST['Folio'];
    $Clave = $_GET['clave'];
    $Motivo = $_GET['motivo'];
    $Fundamento = $_GET['fundamento'];
    $Fecha = $_GET['fecha'];
    $Hora = $_GET['hora'];
    $Lugar = $_GET['lugar'];
    $Conductor = $_GET['conductor'];
    $Entidad = $_GET['entidad'];
    $Garantia = $_GET['garantia'];
    $Agente = $_GET['agente'];
    $NumLicencia = $_GET['numLicencia'];
    $IdVehiculo = $_GET['id'];
    $FolioCirculacion = $_GET['folioCirculacion'];
    $Propietario = $_GET['propietario'];

    $Con = Conectar();
    $SQL = "UPDATE `Multas` SET `Folio`='$Folio',`ClaveAgente`='$Clave',`Motivo`='$Motivo',
            `Fundamento`='$Fundamento',`Fecha`='$Fecha',`Hora`='$Hora',`Lugar`='$Lugar',
            `Conductor`='$Conductor',`Entidad`='$Entidad',`Garantia`='$Garantia',
            `Agente`='$Agente',`Propietario`='$Propietario',`IdVehiculo`='$IdVehiculo',
            `NumLicencia`='$NumLicencia',`FolioTarjeta`='$FolioCirculacion' 
            WHERE `Folio` = $Folio";
    $Result = Ejecutar($Con, $SQL);
    print("\nResult: " . $Result);
    Desconectar($Con);
}
