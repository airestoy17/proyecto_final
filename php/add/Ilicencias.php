<?php
    $NumLicencia = $_GET['numLicencia'];
    $Tipo = $_GET['tipos'];
    $FechaExp = $_GET['fechaExp'];
    $FechaVen = $_GET['fechaVen'];
    $Restriccion = $_GET['restriccion'];
    $ID = $_GET['idConductor'];

    print("Licencia: ".$NumLicencia."</br>");
    print("Tipo: ".$Tipo."</br>");
    print("Fecha Exp:".$FechaExp."</br>");
    print("Fecha Vencimiento: ".$FechaVen."</br>");
    print("Restricción:".$Restriccion."</br>");
    print("ID:".$ID."</br>");

    include("Conexion.php");
    $Con=Conectar();
    //$SQL="INSERT INTO Licencias VALUES ('$NumLicencia', '$Tipo','$FechaExp','$FechaVen','$Restriccion','$ID')";
    $SQL="INSERT INTO Licencias VALUES ('$NumLicencia','$Tipo','$FechaExp','$FechaVen','$Restriccion','$ID')";
    $Result=Ejecutar($Con, $SQL);
    print("\nResult: ".$Result);
    Desconectar($Con);
