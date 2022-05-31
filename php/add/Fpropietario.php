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
        <h2>Agregue un propietario</h2>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Información personal</h4>
          <form
            class="needs-validation"
            method="get"
            action="Ipropietario.php"
            novalidate
          >
            <div class="mb-3">
              <label for="id">Id</label>
              <input
                type="text"
                class="form-control"
                id="id"
                name="id"
                required
              />
              <div class="invalid-feedback">Valid first name is required.</div>
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
              <label for="RFC">RFC </label>
              <input
                type="text"
                class="form-control"
                id="RFC"
                name="RFC"
                placeholder=""
              />
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="municipio">Municipio</label>
                <input
                  type="text"
                  class="form-control"
                  id="municipio"
                  name="municipio"
                  placeholder="Querétaro"
                />
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="localidad">Localidad</label>
                <input
                  type="text"
                  class="form-control"
                  id="localidad"
                  name="localidad"
                  placeholder="Milenio III"
                />
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
