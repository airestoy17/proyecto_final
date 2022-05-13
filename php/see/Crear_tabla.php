<?php

function crear_tabla($Result)
{
    #Crear tabla
    print("<table id='tabla'>");

    $tableName = '';

    $PK = '';
    $counter = 0;

    #Añadir encabezados
    while ($finfo = mysqli_fetch_field($Result)) {
        #Almacenar el nombre de la tabla
        $tableName = $finfo->table;
        if ($counter == 0) {
            #Sacar el nombre de la llave primaria
            $PK = $finfo->name;
        }
        print("<th>" . $finfo->name . "</th>");
        $counter++;
    }

    #Quitar la mayúscula del nombre de la tabla
    $tableName = strtolower(substr($tableName, 0, 1)) . substr($tableName, 1, strlen($tableName) - 1);

    # Añadir contenido
    $num_columnas = mysqli_num_fields($Result);
    for ($row = 0; $row < mysqli_num_rows($Result); $row++) {
        $Fila = mysqli_fetch_row($Result);
        print("<tr>");
        for ($i = 0; $i < $num_columnas; $i++) {
            print("<td>" . $Fila[$i] . "</td>");
        }
        # Imprimir columna de actualización
        print("<td> <a href='../update/U" . $tableName . ".php" . "?$PK=" . $Fila[0] . "'>Actualizar</a></td>");
        print("<td> <a href='../remove/F" . $tableName . ".php" . "?$PK=" . $Fila[0] . "'>Eliminar</a></td>");
        print("</tr>");
    }

    print("</table>");
}
