<?php

include("../Conexion.php");
include("../files/upload_file.php");
session_start();
$f_username = $_POST["usuario"];
$f_password = $_POST["password"];
$certificado = $_FILES["certificado"];
$Con = Conectar();
$SQL = "SELECT * FROM Cuentas WHERE username = '$f_username'";
$Result = Ejecutar($Con, $SQL);
$Existe = mysqli_num_rows($Result);

if ($Existe == 1) {
    print("El usuario existe");
    $Fila = mysqli_fetch_row($Result);
    if ($Fila[1] == $f_password) {
        print("Contraseña correcta");
        $SQL = "UPDATE Cuentas SET intentos = 0 WHERE username = '$f_username'";
        $Result = Ejecutar($Con, $SQL);

        if ($Fila[3] == 1) {
            print("Cuenta Activa");

            if ($Fila[4] == 0) {
                print("Cuenta no bloqueada");
                print("ENTRAR");
                $f_certificate = manejarArchivoSeguridad($certificado, $Fila);

                $_SESSION['Bandera'] = 1;

                if ($f_certificate == 1) {
                    if ($Fila[2] == "A") {
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuA.php">');
                    } else {
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuU.php">');
                    }
                } else {
                    print("Certificado no válido");
                }
            } else {
                print("Cuenta bloqueada");
            }
        } else {
            print("Cuenta Inactiva");
        }
    } else {
        print("Contraseña incorrecta");
        $SQL = "UPDATE Cuentas SET intentos = intentos + 1 WHERE username = '$f_username'";
        $Result = Ejecutar($Con, $SQL);
        if ($Fila[5] > 3) {
            $SQL = "UPDATE Cuentas SET bloqueado = 1 WHERE username = '$f_username'";
            $Result = Ejecutar($Con, $SQL);
        }
    }
} else {
    print("El usuario no existe");
}
Desconectar($Con);
