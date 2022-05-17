<?php

function Conectar()
{
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $BD = "sistema_control_vehicular";
    //$Con = mysqli_connect($servidor, $usuario, $BD, $contraseña) or die(mysqli_error($Con));
    $Con = mysqli_connect($servidor, $usuario, $contraseña, $BD);
    return $Con;
}

function Ejecutar($Con, $SQL)
{
    //$Result = mysqli_query($Con, $SQL) or die(mysqli_error($Con));
    $Result = mysqli_query($Con, $SQL) or trigger_error("Query Failed! SQL: $SQL - Error: ".mysqli_error($Con), E_USER_ERROR);
    return $Result;
}

function Desconectar($Con)
{
    mysqli_close($Con);
}
