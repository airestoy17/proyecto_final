<?php
    $folio = $_REQUEST['folio'];
    $uso = $_REQUEST['uso'];
    $operacion = $_REQUEST['operacion'];
    $oficinaExp = $_REQUEST['oficinaExp'];
    $nci = $_REQUEST['nci'];
    $idVehiculo = $_REQUEST['idVehiculo'];
    $idPropietario = $_REQUEST['idPropietario'];
    $fechaExp = $_REQUEST['fechaExp'];

    print("folio: ".$folio."</br>");
    print("uso: ".$uso."</br>");
    print("operacion: ".$operacion."</br>");
    print("oficinaExp: ".$oficinaExp."</br>");
    print("nci: ".$nci."</br>");
    print("idVehiculo: ".$idVehiculo."</br>");
    print("idPropietario: ".$idPropietario."</br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO `TarjetasDeCirculacion`(`Folio`, `Uso`, `Operacion`, `OficinaExp`, `NCI`, `FechaExp`, `IdPropietario`, `IdVehiculo`) VALUES ('$folio','$uso','$operacion','$oficinaExp','$nci','$fechaExp','$idPropietario','$idVehiculo')";
    $Result=Ejecutar($Con, $SQL);
    echo $Result;
    Desconectar($Con);
?>