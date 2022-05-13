<?php
$userName = $_POST['userName'];
$password = $_POST['password'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
$tipoArchivo = $_POST['tipoArchivo'];

switch ($tipoArchivo) {
    case '.txt':
        generarTxt($userName, $password, $tipo, $status);
        break;
    case '.csv':
        generarCsv($userName, $password, $tipo, $status);
        break;
    case '.xml':
        generarXML($userName, $password, $tipo, $status);
        break;
    case 'otro':
        break;
    default:
        break;
}

function generarTxt($userName, $password, $tipo, $status)
{
    // Abrir
    $manejador = fopen('usuarios.txt', 'a');

    // Escribir
    $texto = 'Username =' . $userName . "\n" .
        'Password = ' . $password . "\n" .
        'Tipo = ' . $tipo . '/n' .
        'Status = ' . $status;
    fwrite($manejador, $texto);
    // Cerrar
    fclose($manejador);
}

function generarCsv($userName, $password, $tipo, $status)
{
    // Abrir
    $manejador = fopen('usuarios.csv', 'a');

    // Escribir
    if (file_exists('usuarios.csv')) {
        $texto = $userName . "," . $password . "," . $tipo . "," . $status . "\n";
    } else {
        $texto = "Usuario,Contraseña,Tipo,Status" . "\n" .
            $userName . "," . $password . "," . $tipo . "," . $status . "\n";
    }

    fwrite($manejador, $texto);
    // Cerrar
    fclose($manejador);
}

function generarXML($userName, $password, $tipo, $status)
{

    // Escribir
    $texto = "";

    $usuario = "<usuario tipo=\"$tipo\">" . "\n";
    $usuario = $usuario . "<nombre_usuario>" . "$userName" . "<nombre_usuario>" . "\n";
    $usuario = $usuario . "<contraseña>" . "$password" . "<contraseña>" . "\n";
    $usuario = $usuario . "<status>" . "$status" . "<status>" . "\n";
    $usuario = $usuario . "</usuario>" . "\n";
    $close = "</usuarios>" . "\n";

    if (file_exists("usuarios.xml") && filesize("usuarios.xml") > 0) {
        $manejador = fopen('usuarios.xml', 'r');
        $contenido = fread($manejador, filesize("usuarios.xml"));
        str_replace("</usuarios>", "", $contenido);
        $texto = $contenido . $usuario . $close;
        $manejador = fopen('usuarios.xml', 'w');
        fwrite($manejador, $texto);
    } else {
        $manejador = fopen('usuarios.xml', 'w');
        $header = "<xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\n";
        $header = $header . "<usuarios>" . "\n";
        $texto = $header . $usuario . $close;
        fwrite($manejador, $texto);
    }

    fclose($manejador);
}
