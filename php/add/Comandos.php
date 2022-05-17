<?php
include("Conexion.php");
$Con = Conectar();

// Fectch row
print("<p>Sección de fetch:</p>");
$SQL = "SELECT Nombre, Domicilio FROM Conductores";
$Result = Ejecutar($Con, $SQL);
while ($row = mysqli_fetch_row($Result)) {
    printf("%s vive en: #%s <br/>", $row[0], $row[1]);
}

// Fetch array
print("<p>Sección de array:</p>");
$SQL = "SELECT ID, Nombre FROM Conductores";
$result = Ejecutar($Con, $SQL);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
printf ("%s (ID) se llama: %s <br/>", $row[0], $row["Nombre"]);

// Fetch field
print("<p>Sección de field:</p>");
$SQL = "SELECT Id, Domicilio FROM Conductores";
$result = Ejecutar($Con, $SQL);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
while ($finfo = mysqli_fetch_field($result)) {
    printf("Nombre:     %s<br/>", $finfo->name);
    printf("Tabla:      %s<br/>", $finfo->table);
    printf("Largo max:  %d<br/>", $finfo->max_length);
    printf("Banderas:   %d<br/>", $finfo->flags);
    printf("Tipo:       %d<br/>", $finfo->type);
    printf("<br/>");
}

printf("Versión de la biblioteca cliente: %s<br/>", mysqli_get_client_info());

printf("Host info: %s<br/>", mysqli_get_host_info($Con));

printf("Server version: %s<br/>", mysqli_get_server_info($Con));



Desconectar($Con);