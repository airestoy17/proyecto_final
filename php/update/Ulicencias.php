<?php
session_start();
if (isset($_SESSION['Bandera']) && isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
  // Datos
  $NumLicencia = $_REQUEST['NumLicencia'];
  // Conexión a la base de datos
  include("./Conexion.php");
  $Con = Conectar();
  $SQL = "SELECT * FROM Licencias WHERE NumLicencia = '$NumLicencia'";
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
  <title>Actualizar Licencias</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <div class="py-5 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
      </svg>
      <h2>Actualiza una licencia</h2>
    </div>

    <div class="row">
      <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Información personal</h4>
        <form class="needs-validation" action="./Ulicencias.php" method="get" novalidate>
          <div class="row">
            <div class="col-lg-6 mb-3">
              <label for="NumLicencia">Número de Licencia</label>
              <input type="text" class="form-control" id="NumLicencia" name="NumLicencia" value='<?php print($Fila[0]); ?>' />
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-lg-6 mb-3">
              <label for="idConductor">Id de conductor</label>
              <input type="text" class="form-control" id="idConductor" name="idConductor" value='<?php print($Fila[5]); ?>' required />
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="fechaExp">Fecha de expedición</label>
              <input type="date" class="form-control" id="fechaExp" name="fechaExp" value='<?php print($Fila[2]); ?>' />
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fechaVen">Fecha de vencimiento</label>
              <input type="date" class="form-control" id="fechaVen" name="fechaVen" value='<?php print($Fila[3]); ?>' />
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="tipo">Tipo de licencia</label>
            <input list="tipos" class="form-control" id="tipo" name="tipo" value='<?php print($Fila[1]); ?>' required />
            <datalist id="tipos">
              <option value="A"></option>
              <option value="B"></option>
              <option value="C"></option>
              <option value="D"></option>
              <option value="E"></option>
            </datalist>
            <div class="invalid-feedback">Valid first name is required.</div>
          </div>

          <div class="mb-3">
            <label for="restriccion">Restricciones</label>
            <input type="text" class="form-control" id="restriccion" name="restriccion" value='<?php print($Fila[4]); ?>' />
            <div class="invalid-feedback">Valid first name is required.</div>
          </div>
          <hr class="mb-4" />
          <button class="btn btn-primary btn-lg btn-block" type="submit">
            Actualizar licencia
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

</body>

</html>

<?php
if (isset($_GET['tipo'])) {
  $NumLicencia = $_REQUEST['NumLicencia'];
  $Tipo = $_GET['tipo'];
  $FechaExp = $_GET['fechaExp'];
  $FechaVen = $_GET['fechaVen'];
  $Restriccion = $_GET['restriccion'];
  $idConductor = $_GET['idConductor'];

  $Con = Conectar();
  $SQL = "UPDATE Licencias SET Tipo = '$Tipo', FechaExp = '$FechaExp', FechaVencimiento = '$FechaVen',
          Restriccion = '$Restriccion', IdConductor = '$idConductor' WHERE numLicencia = '$NumLicencia'";
  $Result = Ejecutar($Con, $SQL);
  print("Registros actualizados = " . mysqli_affected_rows($Con));
  Desconectar($Con);
}
?>