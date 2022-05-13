<?php
require('./Rotation.php');

$pdf = new PDF_Rotate('l');
$pdf->AddPage();

/* VARIABLES */
$tipoServicio = utf8_decode('PARTICULAR');
$propietario = utf8_decode('ARCEGA AMAYA AYDEE');
$folio = utf8_decode('122824853');
$vigencia = utf8_decode('INDEFINIDA');
$placa = utf8_decode('2008/UMY686C*');
$rfc = utf8_decode('AEAA690326538');
$localidad = utf8_decode('SANTIAGO DE QUERETARO');
$municipio = utf8_decode('QUERETARO');
$origen = utf8_decode('NACIONAL');
$color = utf8_decode('ROJO METALICO');
$numeroSerie = utf8_decode('3N1AB7AD2KY391723');
$marca = utf8_decode('NISSAN');
$linea = utf8_decode('SENTRA');
$sublinea = utf8_decode('SENSE MT');
$cilindraje = utf8_decode('4');
$capacidad  = utf8_decode('0');
$puertas = utf8_decode('4');
$asientos = utf8_decode('5');
$transmision = utf8_decode('ESTANDAR');
$CVE = utf8_decode('0041166');
$clase = utf8_decode('1');
$tipo  = utf8_decode('5');
$uso  = utf8_decode('36');
$RFA = utf8_decode('');
$fechaExpedicion = utf8_decode('15-ABR-21');
$oficinaExpedidora = utf8_decode('');
$movimiento = utf8_decode('ALTA DE PLACA');
$numeroMotor = utf8_decode('MRA869343J');
$modelo = utf8_decode('2019');
$operacion = utf8_decode('20201/1035660*');
$folio = utf8_decode('A 2082618');

/* HEADER */

// Servicio 
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'TIPO DE SERVICIO', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->Cell(10, 5, $tipoServicio, 0, 1);

// Propietario
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'PROPIETARIO', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->SetX(40);
$pdf->Cell(10, 5, $propietario, 0, 1);

// Holograma
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(73);
$pdf->Cell(10, 5, 'HOLOGRAMA', 0, 1);

// Folio
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(110);
$pdf->Cell(10, 5, 'FOLIO', 0, 1);
$pdf->SetFont('Arial', '', 15);
$pdf->setY(15);
$pdf->setX(110);
$pdf->Cell(10, 5, $folio, 0, 1);

// Vigencia
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(150);
$pdf->Cell(10, 5, 'VIGENCIA', 0, 1);
$pdf->SetFont('Arial', '', 15);
$pdf->setY(15);
$pdf->setX(150);
$pdf->Cell(10, 5, $vigencia, 0, 1);

// Placa
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(200);
$pdf->Cell(10, 5, 'PLACA', 0, 1);
$pdf->SetFont('Arial', 'B', 18);
$pdf->setY(15);
$pdf->setX(200);
$pdf->Cell(10, 5, $placa, 0, 1);

// RFC
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(50);
$pdf->Cell(10, 5, 'RFC', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->SetY(55);
$pdf->Cell(10, 5, $rfc, 0, 1);

// Localidad
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'LOCALIDAD', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(40, 5, $localidad);

// MUNICIPIO
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'MUNICIPIO', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(40, 5, $municipio);

// Constancia
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetY(95);
$pdf->MultiCell(55, 5, 'NUMERO DE CONSTANCIA DE INCRIPCION (NCI)', 0, 1);

// Origen
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(115);
$pdf->Cell(10, 5, 'ORIGEN', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(40, 5, $origen);

// Color
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'COLOR', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(60, 5, $color);

// Numero de Serie
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(50);
$pdf->SetX(100);
$pdf->Cell(10, 5, 'NUMERO DE SERIE', 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(100);
$pdf->MultiCell(70, 5, $numeroSerie);

// Marca line sublinea
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, utf8_decode('MARCA/LINEA/SUBLINEA'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(100);
$pdf->MultiCell(100, 5, $marca.'/'.$linea.'/'.$sublinea);

// Cilindraje
$pdf->SetY(95);
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, utf8_decode('CILINDRAJE'), 0, 1);
$pdf->SetY(95);
$pdf->SetX(130);
$pdf->Cell(10, 5, $cilindraje, 0, 1);

// Capacidad 
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('CAPACIDAD'), 0, 1);
$pdf->SetY(100.5);
$pdf->SetX(130);
$pdf->Cell(10, 5, $capacidad, 0, 1);

// Puertas
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('PUERTAS'), 0, 1);
$pdf->SetY(106);
$pdf->SetX(130);
$pdf->Cell(10, 5, $puertas, 0, 1);

// Asientos
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('ASIENTOS'), 0, 1);
$pdf->SetY(111);
$pdf->SetX(130);
$pdf->Cell(10, 5, $asientos, 0, 1);

// Combustible
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('COMBUSTIBLE'), 0, 1);
$pdf->SetY(116);
$pdf->SetX(130);
$pdf->Cell(10, 5, '', 0, 1);

// Transmision 
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('TRANSMISION'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(100);
$pdf->Cell(10, 5, $transmision, 0, 1);

// CVE VEHICULAR 
$pdf->SetY(93);
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('CVE VEHICULAR'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(160);
$pdf->Cell(10, 5, $CVE, 0, 1);

// Clase 
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('CLASE'), 0, 1);
$pdf->SetY(104);
$pdf->SetX(180);
$pdf->Cell(10, 5, $clase, 0, 1);

// Tipo  
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('TIPO'), 0, 1);
$pdf->SetY(109);
$pdf->SetX(180);
$pdf->Cell(10, 5, $tipo, 0, 1);

// Uso  
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('USO'), 0, 1);
$pdf->SetY(114);
$pdf->SetX(180);
$pdf->Cell(10, 5, $uso, 0, 1);

// Modelo
$pdf->SetY(50);
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('MODELO'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $modelo, 0, 1);

// Operacion
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('OPERACION'), 0, 1);
$pdf->SetFont('Arial', '', 16);
$pdf->SetX(210);
$pdf->Cell(10, 5, $operacion, 0, 1);

// Folio
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('FOLIO'), 0, 1);
$pdf->SetFont('Arial', '', 16);
$pdf->SetX(210);
$pdf->Cell(10, 5, $folio, 0, 1);

// PLACA ANT

// fecha expedicion
$pdf->SetY(93);
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('FECHA DE EXPEDICION'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $fechaExpedicion, 0, 1);

// Movimienot
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('MOVIMIENTO'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $movimiento, 0, 1);

// Numero de motor 
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('MOVIMIENTO'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $numeroMotor, 0, 1);


// FOLIO
$pdf->SetFont('Arial', 'B', 20);
$pdf->RotatedText(290, 60, $folio, 270);

$pdf->Output();