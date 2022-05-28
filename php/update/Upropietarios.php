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
            <h2>Edite un propietario</h2>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Información personal</h4>
                <form class="needs-validation" method="get" action="Ipropietario.php" novalidate>
                    <div class="mb-3">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre" placeholder="" value="<?php print($Fila[1]); ?>" required />
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div>

                    <div class="mb-3">
                        <label for="RFC">RFC </label>
                        <input type="text" class="form-control" id="RFC" placeholder="" value="<?php print($Fila[4]); ?>"/>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio" placeholder="Querétaro" value="<?php print($Fila[2]); ?>"/>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="localidad">Localidad</label>
                            <input type="text" class="form-control" id="localidad" placeholder="Milenio III" value="<?php print($Fila[3]); ?>"/>
                            <div class="invalid-feedback">
                                Please provide a valid state.
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
    <form method="get" id="form" action="Ipropietario.php">
      <label for="idPropietario">ID Propietario</label>
      <input type="text" name="idPropietario" id="idPropietario" />
      <br />
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" />
      <br />
      <label for="municipio">Municipio</label>
      <input type="text" name="municipio" id="municipio" />
      <br />
      <label for="localidad">Localidad</label>
      <input type="text" name="localidad" id="localidad" />
      <br />
      <label for="RFC">RFC</label>
      <input type="text" name="RFC" id="RFC" />
      <br />
      <button type="submit">Subir</button>
    </form>
    -->
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
    <h1>Actualizar Propietario</h1>
    <form method="get" id="form" action="Upropietarios.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value='<?php print($Fila[1]); ?>' />
        <br />
        <label for="municipio">Municipio</label>
        <input type="text" name="municipio" id="municipio" value='<?php print($Fila[2]); ?>' />
        <br />
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="localidad" value='<?php print($Fila[3]); ?>' />
        <br />
        <label for="RFC">RFC</label>
        <input type="text" name="RFC" id="RFC" value='<?php print($Fila[4]); ?>' />
        <br />
        <button type="submit">Subir</button>
    </form>
    -->
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