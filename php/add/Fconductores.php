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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="72"
          height="72"
          fill="currentColor"
          class="bi bi-truck"
          viewBox="0 0 16 16"
        >
          <path
            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
          />
        </svg>
        <h2>Agregue un conductor</h2>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Información personal</h4>
          <form
            class="needs-validation "
            action="./Iconductores.php"
            method="post"
            enctype="multipart/form-data"
            novalidate
          >
            <div class="mb-3">
              <label for="id">ID</label>
              <input
                type="text"
                class="form-control"
                id="id"
                name="id"
                placeholder=""
              />
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="nombre">Nombre completo</label>
              <input
                type="text"
                class="form-control"
                id="nombre"
                name="nombre"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid first name is required.</div>
            </div>

            <div class="mb-3">
              <label for="domicilio">Domicilio</label>
              <input
                type="text"
                class="form-control"
                id="domicilio"
                name="domicilio"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid first name is required.</div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input
                  type="date"
                  class="form-control"
                  id="fechaNacimiento"
                  name="fechaNacimiento"
                  placeholder="Querétaro"
                />
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="grupoSangre">Grupo sanguíneo</label>
                <input
                  list="sangres"
                  class="form-control"
                  id="grupoSangre"
                  name="grupoSangre"
                />
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
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="antiguedad">Antigüedad (en años)</label>
                <input
                  type="number"
                  class="form-control"
                  id="antiguedad"
                  name="antiguedad"
                />
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="firma">Firma</label>
                <input
                  type="file"
                  class="form-control"
                  id="firma"
                  name="firma"
                />
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" />
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>

            <div class="mb-3 form-check-inline">
              <input
                type="checkbox"
                class="form-control"
                id="donador"
                name="donador"
                placeholder=""
                value=""
                required
              />
              <label for="donador">¿Es donador de órganos?</label>

              <div class="invalid-feedback">Valid first name is required.</div>
            </div>

            <hr class="mb-4" />
            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Agregar conductor
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
    </script>
  </body>
</html>
