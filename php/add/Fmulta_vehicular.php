<?php
session_start();
if (isset($_SESSION['Bandera']) && isset($_SESSION['Admin']) && $_SESSION['Admin'] == 1) {
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
    <title>Sistema de control vehicular</title>
    <link rel="stylesheet" href="../../css/custom.css" />
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
          class="d-block mx-auto mb-4"
          width="72"
          height="72"
          fill="currentColor"
          class="bi bi-person-square"
          viewBox="0 0 16 16"
        >
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path
            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"
          />
        </svg>
        <h2>Agregue una multa vehicular</h2>
      </div>
  
    <div class="row">
      <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Información de multa vehicular</h4>
        <form
          class="needs-validation"
          method="get"
          action="Imulta_vehicular.php"
          novalidate
        >
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="folio">Folio</label>
              <input
                type="text"
                class="form-control"
                id="folio"
                name="folio"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Folio is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="clave">Clave</label>
              <input
                type="text"
                class="form-control"
                id="clave"
                name="clave"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Clave is required.</div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="motivo">Motivo</label>
              <input
                type="text"
                class="form-control"
                id="motivo"
                name="motivo"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid motivo is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fundamento">Fundamento</label>
              <input
                type="text"
                class="form-control"
                id="fundamento"
                name="fundamento"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Fundamento is required.</div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="fecha">Fecha</label>
              <input
                type="date"
                class="form-control"
                id="fecha"
                name="fecha"
                placeholder=""
                required
              />
              <div class="invalid-feedback">
                valid fecha is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="hora">Hora</label>
              <input
                type="time"
                class="form-control"
                id="hora"
                name="hora"
                placeholder=""
                required
              />
              <div class="invalid-feedback">
                valid id conductor is required.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="lugar">Lugar</label>
              <input
                type="text"
                class="form-control"
                id="lugar"
                name="lugar"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Lugar is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="conductor">Conductor</label>
              <input
                type="text"
                class="form-control"
                id="conductor"
                name="conductor"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Conductor is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="entidad">Entidad</label>
              <input
                type="text"
                class="form-control"
                id="entidad"
                name="entidad"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Entidad is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="garantia">Garantia</label>
              <input
                type="text"
                class="form-control"
                id="garantia"
                name="garantia"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Garantia is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="agente">Agente</label>
              <input
                type="text"
                class="form-control"
                id="agente"
                name="agente"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Agente is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="numLicencia">Numero de licencia</label>
              <input
                type="text"
                class="form-control"
                id="numLicencia"
                name="numLicencia"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Numero de licencia is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="id">Id de vehiculo</label>
              <input
                type="text"
                class="form-control"
                id="id"
                name="id"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Id de vehiculo is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="folioCirculacion">Folio de circulacion</label>
              <input
                type="text"
                class="form-control"
                id="folioCirculacion"
                name="folioCirculacion"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Folio de circulacion is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="propietario">Propietario</label>
              <input
                type="text"
                class="form-control"
                id="propietario"
                name="propietario"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Propetiario is required.
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
    <form action="Imulta_vehicular.php" id="form">
        <label for="folio">Folio</label>
        <input type="text" name="folio" id="folio">
        <br>
        <label for="agente">Agente</label>
        <input type="text" name="agente" id="agente">
        <br>
        <label for="clave">Clave Agente</label>
        <input type="text" name="clave" id="clave">
        <br>
        <label for="motivo">Motivo</label>
        <input type="text" name="motivo" id="motivo">
        <br>
        <label for="fundamento">Fundamento</label>
        <input type="text" name="fundamento" id="fundamento">
        <br>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha">
        <br>
        <label for="fecha">Hora</label>
        <input type="time" name="hora" id="hora">
        <br>
        <label for="lugar">Lugar</label>
        <input type="text" name="lugar" id="lugar">
        <br>
        <label for="entidad">Garantia</label>
        <input type="text" name="garantia" id="garantia">
        <br>
        <label for="entidad">Propetiario</label>
        <input type="text" name="propetiario" id="propetiario">
        <br>
        <label for="entidad">Conductor</label>
        <input type="text" name="conductor" id="conductor">
        <br>
        <label for="entidad">Entidad</label>
        <input type="text" name="entidad" id="entidad">
        <br>
        <label for="numLicencia">NumLicencia</label>
        <input type="text" name="numLicencia" id="numLicencia">
        <br>
        <label for="id">ID de vehículo</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="folioCirculacion">Folio Tarjeta de Circulación</label>
        <input type="text" name="folioCirculacion" id="folioCirculacion">
        <br>
        <button type="submit">Subir</button>
    </form>
    -->
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