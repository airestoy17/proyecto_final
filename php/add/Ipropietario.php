<?php
    $idPropietario = $_REQUEST['idPropietario'];
    $nombre = $_REQUEST['nombre'];
    $municipio = $_REQUEST['municipio'];
    $localidad = $_REQUEST['localidad'];
    $rfc = $_REQUEST['RFC'];


    print("idPropietario: ".$idPropietario."</br>");
    print("nombre: ".$nombre."</br>");
    print("municipio: ".$municipio."</br>");
    print("localidad: ".$localidad."</br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO Propietarios VALUES ('$idPropietario','$rfc','$municipio','$localidad','$nombre')";
    $Result=Ejecutar($Con, $SQL);
    printf("Affected rows (INSERT): %d<br/>", mysqli_affected_rows($Con));
    printf ("Nuevo registro con el id %d.<br/>", mysqli_insert_id($Con));
    printf("%s<br/>", mysqli_info($Con));
    printf("Errormessage: %s<br/>", mysqli_error($Con));
    echo $Result;

    Desconectar($Con);
