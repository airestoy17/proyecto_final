<?php
// Datos
$Folio = $_REQUEST['Folio'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM TarjetasDeCirculacion WHERE Folio = '$Folio'";
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
    <title>Update vehiculos</title>
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
            <h2>Edite tarjetas de circulacion</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Tarjetas de circulacion</h4>
                <form class="needs-validation" method="get" action="Itarjeta_circulacion.php" novalidate>
                    
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control" id="folio" name="folio" placeholder="" value="" required />
                        <div class="invalid-feedback">Valid Folio is required.</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="uso">Uso</label>
                        <input type="text" class="form-control" id="uso" name="uso" placeholder="" value=""/>
                        <div class="invalid-feedback">
                            Valid Uso is required.
                        </div>
                    </div>
                </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="operacion">Operacion</label>
                            <input type="text" class="form-control" id="operacion" name="operacion" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Operacion is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="oficinaExp">Oficina expedidora</label>
                            <input type="text" class="form-control" id="oficinaExp" name="oficinaExp" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Oficina expendidora is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nci">NCI</label>
                            <input type="text" class="form-control" id="nci" name="nci" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid NCI is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="idVehiculo">Id de vehiculo</label>
                            <input type="text" class="form-control" id="idVehiculo" name="idVehiculo" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Id de vehiculo is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fechaExp">Fecha de expedicion</label>
                            <input type="date" class="form-control" id="fechaExp" name="fechaExp" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Fecha de expedicion is requied.
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
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            "use strict";

            window.addEventListener(
                "load",
                function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName("needs-validation");

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(
                        forms,
                        function(form) {
                            form.addEventListener(
                                "submit",
                                function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                },
                                false
                            );
                        }
                    );
                },
                false
            );
        })();
    </script>
    <!--
    <form method="get" id="form" action="UtarjetasDeCirculacion.php">
        <label for="Folio">Folio</label>
        <input type="text" name="Folio" id="fFolio" value='<?php print($Fila[0]); ?>'>
        <br>
        <label for="uso">Uso</label>
        <input type="text" name="uso" id="uso" value='<?php print($Fila[1]); ?>'>
        <br>
        <label for="operacion">Operación</label>
        <input type="text" name="operacion" id="operacion"value='<?php print($Fila[2]); ?>'>
        <br>
        <label for="oficinaExp">Oficina de expedición</label>
        <input type="text" name="oficinaExp" id="oficinaExp"value='<?php print($Fila[3]); ?>'>
        <br>
        <label for="nci">NCI</label>
        <input type="text" name="nci" id="nci"value='<?php print($Fila[4]); ?>'>
        <br>
        <label for="idVehiculo">ID de vehículo</label>
        <input type="text" name="idVehiculo" id="idVehiculo"value='<?php print($Fila[7]); ?>'>
        <br>
        <label for="idPropietario">ID de Propietario</label>
        <input type="text" name="idPropietario" id="idPropietario"value='<?php print($Fila[6]); ?>'>
        <br>
        <label for="fechaExp">Fecha de Expedición</label>
        <input type="date" name="fechaExp" id="fechaExp"value='<?php print($Fila[5]); ?>'>
        <br>
        <button type="submit">Subir</button>
    </form>
-->
  </body>
</html>

<?php
if (isset($_GET['uso'])) {
    $folio = $_REQUEST['Folio'];
    $uso = $_REQUEST['uso'];
    $operacion = $_REQUEST['operacion'];
    $oficinaExp = $_REQUEST['oficinaExp'];
    $nci = $_REQUEST['nci'];
    $idVehiculo = $_REQUEST['idVehiculo'];
    $idPropietario = $_REQUEST['idPropietario'];
    $fechaExp = $_REQUEST['fechaExp'];

    $Con = Conectar();
    $SQL = "UPDATE `TarjetasDeCirculacion` SET `Uso`='$uso',
            `Operacion`='$operacion',`OficinaExp`='$oficinaExp',`NCI`='$nci',
            `FechaExp`='$fechaExp',`IdPropietario`='$idPropietario',`IdVehiculo`='$idVehiculo' 
            WHERE `Folio`='$folio'";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>