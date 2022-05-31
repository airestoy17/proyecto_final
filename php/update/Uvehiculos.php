<?php
// Datos
$Folio = $_REQUEST['Id'];
// Conexión a la base de datos
include("./Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Vehiculos WHERE Id = '$Folio'";
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
            <h2>Edite vehiculos</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Vehiculos</h4>
                <form class="needs-validation" method="get" action="Ivehiculos.php" novalidate>
                    
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="idVehiculo">Id de vehiculo</label>
                        <input type="text" class="form-control" id="idVehiculo" name="idVehiculo" placeholder="" value="" required />
                        <div class="invalid-feedback">Valid Id de vehiculo is required.</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="origen">Origen</label>
                        <input type="text" class="form-control" id="origen" name="origen" placeholder="" value=""/>
                        <div class="invalid-feedback">
                            Valid origen is required.
                        </div>
                    </div>
                </div>
        
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="color">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Color is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cilindraje">Cilindraje</label>
                            <input type="text" class="form-control" id="cilindraje" name="cilindraje" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Cilindraje is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="capacidad">Capacidad</label>
                            <input type="text" class="form-control" id="capacidad" name="capacidad" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Capacidad is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="puertas">Puertas</label>
                            <input type="text" class="form-control" id="puertas" name="puertas" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Puertas is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="asientos">Asientos</label>
                            <input type="text" class="form-control" id="asientos" name="asientos" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Lugar is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="combustible">Combustible</label>
                            <input type="text" class="form-control" id="combustible" name="combustible" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid combustible is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="transmision">Transmision</label>
                            <input type="text" class="form-control" id="transmision" name="transmision" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Transmision is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="clase">Clase</label>
                            <input type="text" class="form-control" id="clase" name="clase" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Clase is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Tipo is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="rfa">RFA</label>
                            <input type="text" class="form-control" id="rfa" name="rfa" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid RFA is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Modelo is requied.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numMotor">Numero de motor</label>
                            <input type="text" class="form-control" id="numMotor" name="numMotor" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Numero de motor is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="codigoVehicular">Codigo vehicular</label>
                            <input type="text" class="form-control" id="codigoVehicular" name="codigoVehicular" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Codigo vehicular is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="numSerie">Numero de serie</label>
                            <input type="text" class="form-control" id="numSerie" name="numSerie" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Numero de serie is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Marca is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="submarca">Submarca</label>
                            <input type="text" class="form-control" id="submarca" name="submarca" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Submarca is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="linea">Linea</label>
                            <input type="text" class="form-control" id="linea" name="linea" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Linea is requied.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="placa">Placa</label>
                            <input type="text" class="form-control" id="placa" name="placa" placeholder="" value=""/>
                            <div class="invalid-feedback">
                                Valid Placa is required.
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
    <form action="Ivehiculos.php" id="form" method="post">
        <label for="Id">ID Vehiculo</label>
        <input type="text" name="Id" id="Id" value='<?php print($Fila[0]); ?>'>
        <br>
        <label for="origen">Origen</label>
        <input type="text" name="origen" id="origen" value='<?php print($Fila[14]); ?>'>
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value='<?php print($Fila[1]); ?>'>
        <br>
        <label for="cilindraje">Cilindraje</label>
        <input type="text" name="cilindraje" id="cilindraje" value='<?php print($Fila[2]); ?>'>
        <br>
        <label for="capacidad">Capacidad</label>
        <input type="text" name="capacidad" id="capacidad" value='<?php print($Fila[3]); ?>'>
        <br>
        <label for="puertas">Puertas</label>
        <input type="text" name="puertas" id="puertas" value='<?php print($Fila[4]); ?>'>
        <br>
        <label for="asientos">Asientos</label>
        <input type="text" name="asientos" id="asientos" value='<?php print($Fila[5]); ?>'>
        <br>
        <label for="combustible">Combustible</label>
        <input type="text" name="combustible" id="combustible" value='<?php print($Fila[6]); ?>'>
        <br>
        <label for="transmision">Transmision</label>
        <input type="text" name="transmision" id="transmision" value='<?php print($Fila[7]); ?>'>
        <br>
        <label for="clase">Clase</label>
        <input type="text" name="clase" id="clase" value='<?php print($Fila[8]); ?>'>
        <br>
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" value='<?php print($Fila[9]); ?>'>
        <br>
        <label for="rfa">Rfa</label>
        <input type="text" name="rfa" id="rfa" value='<?php print($Fila[10]); ?>'>
        <br>
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" value='<?php print($Fila[11]); ?>'>
        <br>
        <label for="numMotor">Número Motor</label>
        <input type="text" name="numMotor" id="numMotor" value='<?php print($Fila[12]); ?>'>
        <br>
        <label for="codigoVehicular">Código Vehicular</label>
        <input type="text" name="codigoVehicular" id="codigoVehicular" value='<?php print($Fila[19]); ?>'>
        <br>
        <label for="numSerie">NumSerie</label>
        <input type="text" name="numSerie" id="numSerie" value='<?php print($Fila[15]); ?>'>
        <br>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value='<?php print($Fila[16]); ?>'>
        <br>
        <label for="submarca">Submarca</label>
        <input type="text" name="submarca" id="submarca" value='<?php print($Fila[17]); ?>'>
        <br>
        <label for="linea">Linea</label>
        <input type="text" name="linea" id="linea" value='<?php print($Fila[18]); ?>'>
        <br>
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa" value='<?php print($Fila[13]); ?>'>
        <br>
        <button type="submit">Subir</button>
    </form>
-->
</body>

</html>

<?php
if (isset($_GET['origen'])) {
    $idVehiculo = $_REQUEST['Id'];
    $origen = $_REQUEST['origen'];
    $color = $_REQUEST['color'];
    $cilindraje = $_REQUEST['cilindraje'];
    $capacidad = $_REQUEST['capacidad'];
    $puertas = $_REQUEST['puertas'];
    $agente = $_REQUEST['agente'];
    $asientos = $_REQUEST['asientos'];
    $combustible = $_REQUEST['combustible'];
    $transmision = $_REQUEST['transmision'];
    $clase = $_REQUEST['clase'];
    $tipo = $_REQUEST['tipo'];
    $rfa = $_REQUEST['rfa'];
    $modelo = $_REQUEST['modelo'];
    $numMotor = $_REQUEST['numMotor'];
    $codigoVehicular = $_REQUEST['codigoVehicular'];
    $numSerie = $_REQUEST['numSerie'];
    $marca = $_REQUEST['marca'];
    $submarca = $_REQUEST['submarca'];
    $linea = $_REQUEST['linea'];
    $placa = $_REQUEST['placa'];

    $Con = Conectar();
    $SQL = "UPDATE `Vehiculos` SET `Color`='$color',
           `Cilindraje`='$cilindraje',`Capacidad`='$capacidad',`Puertas`='$puertas',
           `Asientos`='$asientos',`Combustible`='$combustible',`Transmision`='$transmision',
           `Clase`='$clase',`Tipo`='$tipo',`RFA`='$rfa',`Modelo`='$modelo',
           `numMotor`='$numMotor',`Placa`='$placa',`Origen`='$origen',`numSerie`='$numSerie'
           ,`Marca`='$marca',`Submarca`='$submarca',`Linea`='$linea',
           `CodigoVehicular`='$codigoVehicular' WHERE `Id`='$id'";
    $Result = Ejecutar($Con, $SQL);
    print("Registros actualizados = " . mysqli_affected_rows($Con));
    Desconectar($Con);
}
?>