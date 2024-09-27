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
          action="Ivehiculos.php"
          novalidate
        >
      </div>
    </div>
    
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="idVehiculo">Id de vehiculo</label>
              <input
                type="text"
                class="form-control"
                id="idVehiculo"
                name="idVehiculo"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Id de vehiculo is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="origen">Origen</label>
              <input
                type="text"
                class="form-control"
                id="origen"
                name="origen"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Origen is required.</div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="color">Color</label>
              <input
                type="text"
                class="form-control"
                id="color"
                name="color"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Color is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cilindraje">Cilindraje</label>
              <input
                type="text"
                class="form-control"
                id="cilindraje"
                name="cilindraje"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Cilindraje is required.</div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="capacidad">Capacidad</label>
              <input
                type="text"
                class="form-control"
                id="capacidad"
                name="capacidad"
                placeholder=""
                required
              />
              <div class="invalid-feedback">
                valid Capacidad is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="puertas">Puertas</label>
              <input
                type="text"
                class="form-control"
                id="puertas"
                name="puertas"
                placeholder=""
                required
              />
              <div class="invalid-feedback">
                valid Puertas is required.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="asientos">Asientos</label>
              <input
                type="text"
                class="form-control"
                id="asientos"
                name="asientos"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Asientos is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="combustible">Combustible</label>
              <input
                type="text"
                class="form-control"
                id="combustible"
                name="combustible"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Combustible is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="transmision">Transmision</label>
              <input
                type="text"
                class="form-control"
                id="transmision"
                name="transmision"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Transmision is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="clase">Clase</label>
              <input
                type="text"
                class="form-control"
                id="clase"
                name="clase"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Clase is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="tipo">Tipo</label>
              <input
                type="text"
                class="form-control"
                id="tipo"
                name="tipo"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Tipo is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="rfa">RFA</label>
              <input
                type="text"
                class="form-control"
                id="rfa"
                name="rfa"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid RFA is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="modelo">Modelo</label>
              <input
                type="text"
                class="form-control"
                id="modelo"
                name="modelo"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Modelo is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="numMotor">Numero de motor</label>
              <input
                type="text"
                class="form-control"
                id="numMotor"
                name="numMotor"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Numero de motor is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="codigoVehicular">Codigo vehicular</label>
              <input
                type="text"
                class="form-control"
                id="codigoVehicular"
                name="codigoVehicular"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Codigo vehicular is required.
              </div>
            </div>

          <div class="col-md-6 mb-3">
            <label for="numSerie">Numero de serie</label>
            <input
              type="text"
              class="form-control"
              id="numSerie"
              name="numSerie"
              placeholder=""
              value=""
              required
            />
            <div class="invalid-feedback">Valid Numero de serie is required.</div>
          </div>
        </div>
            
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="marca">Marca</label>
            <input
              type="text"
              class="form-control"
              id="marca"
              name="marca"
              placeholder=""
              value=""
              required
            />
            <div class="invalid-feedback">
              Valid Marca is required.
            </div>
          </div>
          

        <div class="col-md-6 mb-3">
          <label for="submarca">Submarca</label>
          <input
            type="text"
            class="form-control"
            id="submarca"
            name="submarca"
            placeholder=""
            value=""
            required
          />
          <div class="invalid-feedback">
            Valid Submarca is required.
          </div>
        </div>
      
        </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="linea">Linea</label>
          <input
            type="text"
            class="form-control"
            id="linea"
            name="linea"
            placeholder=""
            value=""
            required
          />
          <div class="invalid-feedback">
            Valid Linea is required.
          </div>
        </div>
        
      

      <div class="col-md-6 mb-3">
        <label for="placa">Placa</label>
        <input
          type="text"
          class="form-control"
          id="placa"
          name="placa"
          placeholder=""
          value=""
          required
        />
            <div class="invalid-feedback">
          Valid Numero de placa is required.
            </div>
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
    <form action="Ivehiculos.php" id="form" method="post">
        <label for="idVehiculo">ID Vehiculo</label>
        <input type="text" name="idVehiculo" id="idVehiculo">
        <br>
        <label for="origen">Origen</label>
        <input type="text" name="origen" id="origen">
        <br>
        <label for="color">Color</label>
        <input type="text" name="color" id="color">
        <br>
        <label for="cilindraje">Cilindraje</label>
        <input type="text" name="cilindraje" id="cilindraje">
        <br>
        <label for="capacidad">Capacidad</label>
        <input type="text" name="capacidad" id="capacidad">
        <br>
        <label for="puertas">Puertas</label>
        <input type="text" name="puertas" id="puertas">
        <br>
        <label for="agente">Agente</label>
        <input type="text" name="agente" id="agente">
        <br>
        <label for="asientos">Asientos</label>
        <input type="text" name="asientos" id="asientos">
        <br>
        <label for="combustible">Combustible</label>
        <input type="text" name="combustible" id="combustible">
        <br>
        <label for="transmision">Transmision</label>
        <input type="text" name="transmision" id="transmision">
        <br>
        <label for="clase">Clase</label>
        <input type="text" name="clase" id="clase">
        <br>
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo">
        <br>
        <label for="rfa">Rfa</label>
        <input type="text" name="rfa" id="rfa">
        <br>
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">
        <br>
        <label for="numMotor">Número Motor</label>
        <input type="text" name="numMotor" id="numMotor">
        <br>
        <label for="codigoVehicular">Código Vehicular</label>
        <input type="text" name="codigoVehicular" id="codigoVehicular">
        <br>
        <label for="numSerie">NumSerie</label>
        <input type="text" name="numSerie" id="numSerie">
        <br>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">
        <br>
        <label for="submarca">Submarca</label>
        <input type="text" name="submarca" id="submarca">
        <br>
        <label for="linea">Linea</label>
        <input type="text" name="linea" id="linea">
        <br>
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa">
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