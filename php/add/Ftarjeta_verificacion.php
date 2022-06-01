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
        <h2>Agregue una Tarjeta de Verificacion</h2>
      </div>
  
    <div class="row">
      <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Información de Tarjeta de Verificacion</h4>
        <form
          class="needs-validation"
          method="get"
          action="Itarjeta_verificacion.php"
          novalidate
        >
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="tipoServicio">Tipo de servicio</label>
              <input
                type="text"
                class="form-control"
                id="tipoServicio"
                name="tipoServicio"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Tipo de servicio is required.
              </div>
            </div>
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
              <div class="invalid-feedback">Valid Entidad is required.</div>
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
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Municipio is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="numLineaVerifiacion">Numero linea de verificacion</label>
              <input
                type="text"
                class="form-control"
                id="numLineaVerifiacion"
                name="numLineaVerifiacion"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Numero linea de verificacion is required.</div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="tecnicoVerificador">Tecnico verificador</label>
              <input
                type="text"
                class="form-control"
                id="tecnicoVerificador"
                name="tecnicoVerificador"
                placeholder=""
                required
              />
              <div class="invalid-feedback">
                valid Tecnico verificador is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fechaExp">Fecha de expedicion</label>
              <input
                type="date"
                class="form-control"
                id="fechaExp"
                name="fechaExp"
                placeholder=""
                required
              />
              <div class="invalid-feedback">
                valid Fecha de expedicion is required.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="horaSalida">Hora de salida</label>
              <input
                type="time"
                class="form-control"
                id="horaSalida"
                name="horaSalida"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Hora de salida is required.
              </div>
            </div>
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
              <div class="invalid-feedback">Valid Motivo is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="folioCertificado">Folio Certificado</label>
              <input
                type="text"
                class="form-control"
                id="folioCertificado"
                name="folioCertificado"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Folio certificado is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="semestre">Semestre</label>
              <input
                type="number"
                class="form-control"
                id="semestre"
                name="semestre"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Semestre is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="vigencia">Vigencia</label>
              <input
                type="date"
                class="form-control"
                id="vigencia"
                name="vigencia"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Vigencia is required.
              </div>
            </div>
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
              <div class="invalid-feedback">Valid Id de vehiculo is required.</div>
            </div>
          </div>

          <div class="row">
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
                Valid Placa is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="tipoCarroceria">Tipo de carroceria</label>
              <input
                type="text"
                class="form-control"
                id="tipoCarroceria"
                name="tipoCarroceria"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Tipo de carroceria is required.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="numCentro">Numero de centro</label>
              <input
                type="text"
                class="form-control"
                id="numCentro"
                name="numCentro"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">
                Valid Numero de centro is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="horaEntrada">Hora de entrada</label>
              <input
                type="time"
                class="form-control"
                id="horaEntrada"
                name="horaEntrada"
                placeholder=""
                value=""
                required
              />
              <div class="invalid-feedback">Valid Motivo is required.</div>
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
    <form action="Itarjeta_verificacion.php" id="form" method="get">
      <label for="folioCertificado">Folio Certificado</label>
      <input type="text" name="folioCertificado" id="folioCertificado" />
      <br />
      <label for="tipoServicio">Tipo Servicio</label>
      <input type="text" name="tipoServicio" id="tipoServicio" />
      <br />
      <label for="entidad">Entidad</label>
      <input type="text" name="entidad" id="entidad" />
      <br />
      <label for="municipio">Municipio</label>
      <input type="text" name="municipio" id="municipio" />
      <br />
      <label for="numLineaVerifiacion">Número Linea Verifiación</label>
      <input type="text" name="numLineaVerifiacion" id="numLineaVerifiacion" />
      <br />
      <label for="fechaExp">Fecha Exp</label>
      <input type="date" name="fechaExp" id="fechaExp" />
      <br />
      <label for="horaSalida">Hora Salida</label>
      <input type="time" name="horaSalida" id="horaSalida" />
      <br />
      <label for="motivo">Motivo</label>
      <input type="text" name="motivo" id="motivo" />
      <br />
      <label for="semestre">Semestre</label>
      <input type="number" name="semestre" id="semestre" />
      <br />
      <label for="tecnicoVerificador">Técnico Verificador</label>
      <input type="text" name="tecnicoVerificador" id="tecnicoVerificador" />
      <br />
      <label for="vigencia">Vigencia</label>
      <input type="date" name="vigencia" id="vigencia" />
      <br />
      <label for="idVehiculo">Id Vehiculo</label>
      <input type="text" name="idVehiculo" id="idVehiculo" />
      <br />
      <label for="placa">Placa</label>
      <input type="text" name="placa" id="placa" />
      <br />
      <label for="numCentro">numCentro</label>
      <input type="text" name="numCentro" id="numCentro" />
      <br />
      <label for="tipoCarroceria">Tipo de carrocería</label>
      <input type="text" name="tipoCarroceria" id="tipoCarroceria" />
      <br />
      <label for="horaEntrada">Hora entrada</label>
      <input type="time" name="horaEntrada" id="horaEntrada" />
      <br />
      <button type="submit">Subir</button>
    </form>
  -->
  </body>
</html>
