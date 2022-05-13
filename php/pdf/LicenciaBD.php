<?php
require('../fpdf.php');
include('./Conexion.php');

/* Conectar a la base de datos */
$licencia = 2;
$Con = Conectar();
$SQL = "SELECT L.*, C.* 
FROM Licencias L, Conductores C
WHERE L.NumLicencia = '$licencia'
AND L.IdConductor = C.Id;";
$Result = Ejecutar($Con, $SQL);
$Fila = mysqli_fetch_array($Result, MYSQLI_BOTH);
/* -------------------------- */

$pdf = new FPDF();

/* Cara frontal de la licencia */
$pdf->AddPage();

# Sección de la información del estado
$country = utf8_decode("Estados Unidos Mexicanos");
$branch = utf8_decode("Poder Ejecutivo del Estado de Querétaro");
$title = utf8_decode("Licencia para conducir");
$secretaria = utf8_decode("Secretaría de Seguridad Ciudadana");

# Sección de la foto y tipo de licencia
$noLicencia = utf8_decode("No. de Licencia");
$licencia = utf8_decode($Fila["NumLicencia"]);
$tipoConductor = utf8_decode("AUTOMOVILISTA");

# Nombre del conductor
$nombre = utf8_decode(strtoupper($Fila['Nombre']));
$apellidoPaterno = utf8_decode(strtoupper($Fila['apellidoPaterno']));
$apellidoMaterno = utf8_decode(strtoupper($Fila['apellidoMaterno']));

# Fechas y antigüedad
$fechaNacimiento = utf8_decode($Fila['FechaNacimiento']);
$fechaExpedicion = utf8_decode($Fila['FechaExp']);
$validez = utf8_decode($Fila['FechaVencimiento']);
$antiguedad = utf8_decode("0");

# Tipo de licencia
$tipoLicencia = utf8_decode("A");

# Aviso
$aviso = utf8_decode("AUTORIZADA PARA QUE LA PRESENTE SEA RECABADA COMO GARANTÍA DE INFRACCIÓN");

# Folio
$folio = "B211485188";
$domicilio = utf8_decode($Fila['Domicilio']);
$grupoSanguineo = utf8_decode("NO SABE");
$donador = $Fila['Donador'] == 0 ? utf8_decode('Si') : utf8_decode('No');
$numeroEmegencia = utf8_decode("000-442-380-2184");
$nombreFirma = utf8_decode("M. EN .P JUAN MARCOS GRANADOS TORRES SECRETARIO DE SEGURIDAD CIUDADANA");
$fundamento = utf8_decode("Officia consequat adipisicing veniam ex excepteur dolor aute duis nostrud veniam aliqua ea tempor exercitation. Sint anim non ut Lorem et sit mollit aliquip laboris. Adipisicing proident excepteur exercitation dolor aliqua aliqua aliqua do eiusmod cupidatat. Est aliquip irure ea fugiat proident commodo nisi nisi Lorem culpa sit ipsum excepteur duis. Voluptate cillum officia pariatur non irure exercitation magna. Quis aliquip do irure pariatur exercitation nulla cillum mollit do. Nisi pariatur minim aliqua id eiusmod do in culpa voluptate pariatur.");


#  Imagen del estado
$pdf->Image('./escudo.png', 10, 10, 20, 25);
# Línea vertical gris
$pdf->SetFillColor(169, 169, 169);
$pdf->Rect(35, 10, 0.5, 25, 'F');
$pdf->SetLeftMargin(40);

# Información del estado
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(10, 5, $country, 0, 1);
$pdf->Cell(10, 5, $branch, 0, 1);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(10, 3, '', 0, 1);
$pdf->Cell(10, 6, $secretaria, 0, 1);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(10, 6, $title, 0, 1);

# Información del tipo de licencia
$pdf->SetY(110);
$pdf->SetFont('Arial', '', 12);
$pdf->SetX(90);
$pdf->Cell(30, 5, $noLicencia, 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 22);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetX(90);
$pdf->Cell(30, 15, $licencia, 0, 1, 'R');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetX(90);
$pdf->Cell(30, 5, $tipoConductor, 0, 1, 'R');
$pdf->Image('./foto.jpg', 130, 70, 70, 70);

# Nombre del conductor
$pdf->SetY(140);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 7, 'Nombre', 0, 1, 'R');
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 20);
$pdf->Cell(30, 7, $apellidoPaterno, 0, 1, 'R');
$pdf->SetX(170);
$pdf->Cell(30, 7, $apellidoMaterno, 0, 1, 'R');
$pdf->SetX(170);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(30, 5, '', 0, 1, 'R');
$pdf->SetX(170);
$pdf->Cell(30, 5, $nombre, 0, 1, 'R');
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 7, 'Observaciones', 0, 1, 'R');

# Fechas de la licencia y antiguedad
$pdf->SetY(200);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, 'Fecha de nacimiento', 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $fechaNacimiento, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, utf8_decode('Fecha de Expedición'), 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $fechaExpedicion, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, utf8_decode('Válida hasta'), 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $validez, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, utf8_decode('Antigüedad'), 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $antiguedad, 0, 1);

# Tipo de licencia
$pdf->SetY(267);
$pdf->SetFillColor(255, 255, 102);
$pdf->Rect(10, 260, 20, 20, 'F');
$pdf->SetX(15);
$pdf->SetTextColor(0, 51, 204);
$pdf->SetFont('Arial', 'B', 30);
$pdf->Cell(30, 7, $tipoLicencia, 0, 1);

# Firma
$pdf->SetY(230);
$pdf->SetX(80);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 7, utf8_decode('Firma'), 0, 1);
$pdf->Image('firma.jpg', 70, 235, 25, 25);

# Aviso legal
$pdf->SetY(262);
$pdf->SetX(30);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(70, 7, $aviso, 0, 'C');

/* Cara reversa de la licencia */
$pdf->AddPage();

# Encabezado
$pdf->Image('911.jpg', 0, 10, 40, 25);
$pdf->Image('089.png', 160, 10, 40, 25);
$pdf->SetY(20);
$pdf->SetX(75);
$pdf->SetFont('Arial', 'B', 25);
$pdf->Cell(30, 7, utf8_decode($folio), 0, 1);

#Domicilio
$pdf->SetY(40);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, 'Domicilio', 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $domicilio, 0, 'R');

# Autos
$pdf->Image('auto.png', 10, 90, 40, 15);
$pdf->Image('auto.png', 60, 90, 40, 15);
$pdf->Image('auto.png', 110, 90, 40, 15);
$pdf->Image('auto.png', 160, 90, 40, 15);

#Grupo Sangíneo
$pdf->SetY(110);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, utf8_decode('Grupo Sanguíneo'), 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $grupoSanguineo, 0, 'R');

# Donador de organos
$pdf->SetY(125);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, utf8_decode('Donador de Orgános'), 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $donador, 0, 'R');

# Número de emergencias 
$pdf->SetY(140);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, utf8_decode('Número de emergencia'), 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $numeroEmegencia, 0, 'R');

# Firma de autorización
$pdf->Image('firma_autorizacion.png', 165, 160, 40, 40);
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(205);
$pdf->SetX(100);
$pdf->MultiCell(100, 7, $nombreFirma, 0, 'R');

#Fundamento legal
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(220);
$pdf->SetX(10);
$pdf->Cell(10, 7, 'Fundamento Legal', 0, 'R');
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(230);
$pdf->SetX(10);
$pdf->MultiCell(0, 7, $fundamento, 0, 'L');

$pdf->Output();
$pdf->Output('./', 'licencia.pdf', true);
