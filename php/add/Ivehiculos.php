<?php
    $idVehiculo = $_REQUEST['idVehiculo'];
    $origen = $_REQUEST['origen'];
    $color = $_REQUEST['color'];
    $cilindraje = $_REQUEST['cilindraje'];
    $capacidad = $_REQUEST['capacidad'];
    $puertas = $_REQUEST['puertas'];
    $asientos = $_REQUEST['asientos'];
    $combustible = $_REQUEST['combustible'];
    $transmision = $_REQUEST['transmision'];
    $clase = $_REQUEST['clase'];
    $tipo = $_REQUEST['tipo'];
    $rfa = $_REQUEST['rfa'];
    $modelo = $_REQUEST['modelo'];
    $numMotor = $_REQUEST['numMotor'];
    $codigoVehicular = $_REQUEST['codigoVehicular'];
    $numSerie = $_REQUEST['numSerie'];
    $marca = $_REQUEST['marca'];
    $submarca = $_REQUEST['submarca'];
    $linea = $_REQUEST['linea'];
    $placa = $_REQUEST['placa'];


    print("idVehiculo: ".$idVehiculo."</br>");
    print("origen: ".$origen."</br>");
    print("color: ".$color."</br>");
    print("cilindraje: ".$cilindraje."</br>");
    print("capacidad: ".$capacidad."</br>");
    print("puertas: ".$puertas."</br>");
    print("agente: ".$agente."</br>");
    print("asientos: ".$asientos."</br>");
    print("combustible: ".$combustible."</br>");
    print("transmision: ".$transmision."</br>");
    print("clase: ".$clase."</br>");
    print("tipo: ".$tipo."</br>");
    print("rfa: ".$rfa."</br>");
    print("modelo: ".$modelo."</br>");
    print("numMotor: ".$numMotor."</br>");
    print("codigoVehicular: ".$codigoVehicular."</br>");
    print("numSerie: ".$numSerie."</br>");
    print("marca: ".$marca."</br>");
    print("submarca: ".$submarca."</br>");
    print("linea: ".$linea."</br>");
    print("placa: ".$placa."</br>");

    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO `Vehiculos`(`Id`, `Color`, `Cilindraje`, `Capacidad`, `Puertas`, `Asientos`, `Combustible`, `Transmision`, `Clase`, `Tipo`, `RFA`, `Modelo`, `numMotor`, `Placa`, `Origen`, `numSerie`, `Marca`, `Submarca`, `Linea`, `CodigoVehicular`) VALUES ('$idVehiculo','$color','$cilindraje','$capacidad','$puertas','$asientos','$combustible','$transmision','$clase','$tipo','$rfa','$modelo','$numMotor','$placa','$origen','$numSerie','$marca','$submarca','$linea','$codigoVehicular')";
    $Result=Ejecutar($Con, $SQL);
    echo $Result;
    Desconectar($Con);
?>