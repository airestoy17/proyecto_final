<?php
session_start();
if (isset($_SESSION['Bandera'])) {
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
            <div class="col-lg-12">
                <h1 class="mb-4 mt-4">Obtener licencia</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 order-md-1">
            <form
                class="needs-validation"
                action="./LicenciaBD.php"
                method="get"
                novalidate
            >
                <div class="mb-3">
                    <label for="numLicencia">Número de Licencia</label>
                    <input
                    type="text"
                    class="form-control"
                    id="numLicencia"
                    name="numLicencia"
                    placeholder=""
                    />
                    <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">
                    Obtener documento de licencia
                </button>
            </form>
        </div>
    </div>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";

        window.addEventListener(
          "load",
          function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                form.addEventListener(
                  "submit",
                  function (event) {
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
        </div>
    </div>

</body>
</html>