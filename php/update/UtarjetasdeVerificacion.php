<?php
session_start();
if (isset($_SESSION['Bandera']) && isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
    // Datos
    $Folio = $_REQUEST['FolioCertificado'];
    // Conexión a la base de datos
    include("./Conexion.php");
    $Con = Conectar();
    $SQL = "SELECT * FROM TarjetasdeVerificacion WHERE FolioCertificado = '$Folio'";
    $Result = Ejecutar($Con, $SQL);
    $Fila = mysqli_fetch_row($Result);
    Desconectar($Con);
} else {
    print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=/proyecto_final/index.php">');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
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
            <h2>Edite tarjetas de verificacion</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Tarjetas de verificacion</h4>
                <form class="needs-validation" method="get" action="Itarjeta_verificacion.php" novalidate>
                    
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tipoServicio">Tipo de servicio</label>
                        <input type="text" class="form-control" id="tipoServicio" name="tipoServicio" placeholder="" value="" required />
                        <div class="invalid-feedback">Valid Tipo de servicio is required.</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="entidad">Entidad</label>
                        <input type="text" class="form-control" id="entidad" name="entidad" placeholder="" value=""/>
                        <div class="invalid-feedback">
                            Valid Entidad is required.
                        </div>
                    </div>
                </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio" name="numicipio" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Municipio is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numLineaVerificacion">Numero linea verificacion</label>
                            <input type="text" class="form-control" id="numLineaVerificacion" name="numLineaVerificacion" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Numero linea verificacion is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tecnicoVerificador">Tenico verificacdor</label>
                            <input type="text" class="form-control" id="tecnicoVerificador" name="tecnicoVerificador" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Tecnico Verificador is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="horaSalida">Hora salida</label>
                            <input type="time" class="form-control" id="horaSalida" name="horaSalida" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Hora salida is required.
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

                        <div class="col-md-6 mb-3">
                            <label for="motivo">Motivo</label>
                            <input type="text" class="form-control" id="motivo" name="motivo" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Motivo is requied.
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="folioCertificado">Folio certificado</label>
                            <input type="text" class="form-control" id="folioCertificado" name="folioCertificado" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Folio certificado is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="semestre">Semestre</label>
                            <input type="number" class="form-control" id="semestre" name="semestre" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Semestre is requied.
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="vigencia">Vigencia</label>
                            <input type="date" class="form-control" id="vigencia" name="vigencia" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Vigencia is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="idVehiculo">Id de vehiculo</label>
                            <input type="text" class="form-control" id="idVehiculo" name="idVehiculo" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Id de vehiculo is requied.
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="placa">Placa</label>
                            <input type="text" class="form-control" id="placa" name="placa" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid placa is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tipoCarroceria">Tipo carroceria</label>
                            <input type="text" class="form-control" id="tipoCarroceria" name="tipoCarroceria" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Tipo carroceria is requied.
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="numCentro">Numero de centro</label>
                            <input type="text" class="form-control" id="numCentro" name="numCentro" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Numero de centro is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="horaEntrada">Hora de entrada</label>
                            <input type="time" class="form-control" id="horaEntrada" name="horaEntrada" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Hora de entrada is requied.
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
-->
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