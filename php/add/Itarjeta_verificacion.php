<?php
    $tipoServicio = $_REQUEST['tipoServicio'];
    $entidad = $_REQUEST['entidad'];
    $municipio = $_REQUEST['municipio'];
    $numLineaVerifiacion = $_REQUEST['numLineaVerifiacion'];
    $tecnicoVerificador = $_REQUEST['tecnicoVerificador'];
    $fechaExp = $_REQUEST['fechaExp'];
    $horaSalida = $_REQUEST['horaSalida'];
    $motivo = $_REQUEST['motivo'];
    $folioCertificado = $_REQUEST['folioCertificado'];
    $semestre = $_REQUEST['semestre'];
    $vigencia = $_REQUEST['vigencia'];
    $idVehiculo = $_REQUEST['idVehiculo'];
    $placa = $_REQUEST['placa'];
    $tipoCarroceria = $_REQUEST['tipoCarroceria'];
    $numCentro = $_REQUEST['numCentro'];
    $horaEntrada = $_REQUEST['horaEntrada'];


    print("idVerifiacion: ".$idVerifiacion."</br>");
    print("tipoServicio: ".$tipoServicio."</br>");
    print("entidad: ".$entidad."</br>");
    print("municipio: ".$municipio."</br>");
    print("numLineaVerifiacion: ".$numLineaVerifiacion."</br>");
    print("asiento: ".$asiento."</br>");
    print("combustible: ".$combustible."</br>");
    print("transmision: ".$transmision."</br>");
    print("tecnicoVerificador: ".$tecnicoVerificador."</br>");
    print("fechaExp: ".$fechaExp."</br>");
    print("horaSalida: ".$horaSalida."</br>");
    print("motivo: ".$motivo."</br>");
    print("folioCertificado: ".$folioCertificado."</br>");
    print("semestre: ".$semestre."</br>");
    print("vigencia: ".$vigencia."</br>");

  
    include("Conexion.php");
    $Con=Conectar();
    $SQL="INSERT INTO TarjetasdeVerificacion VALUES ('$folioCertificado','$placa','$tipoCarroceria','$entidad','$municipio','$numCentro','$numLineaVerifiacion','$tecnicoVerificador','$fechaExp','$horaEntrada','$horaSalida','$motivo','$tipoServicio','$semestre','$vigencia','$idVehiculo')";
    $Result=Ejecutar($Con, $SQL);
    echo $Result;
    Desconectar($Con);
?>