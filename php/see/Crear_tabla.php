<?php

function crear_tabla($Result)
{
    #Crear tabla
    print("<table id='tabla' class='table table-hover'>");

    $tableName = '';

    $PK = '';
    $counter = 0;

    print("<thead><tr>");
    #Añadir encabezados
    while ($finfo = mysqli_fetch_field($Result)) {
        #Almacenar el nombre de la tabla
        $tableName = $finfo->table;
        if ($counter == 0) {
            #Sacar el nombre de la llave primaria
            $PK = $finfo->name;
        }
        print("<th scope='col'>" . $finfo->name . "</th>");
        $counter++;
    }

    # Añadir eliminar y actualizar encabezados
    //print("<th scope='col'>" . "Actualizar" . "</th>");
    //print("<th scope='col'>" . "Eliminar" . "</th>");
    print("<th scope='col'>" . "Acciones" . "</th>");

    print("</tr></thead>");

    #Quitar la mayúscula del nombre de la tabla
    $tableName = strtolower(substr($tableName, 0, 1)) . substr($tableName, 1, strlen($tableName) - 1);

    # Añadir contenido
    $num_columnas = mysqli_num_fields($Result);
    for ($row = 0; $row < mysqli_num_rows($Result); $row++) {
        $Fila = mysqli_fetch_row($Result);
        print("<tr>");
        for ($i = 0; $i < $num_columnas; $i++) {
            print("<td class='p-3'>" . $Fila[$i] . "</td>");
        }
        # Imprimir columna de actualización
        //print("<td class='p-3'> <a href='../update/U" . $tableName . ".php" . "?$PK=" . $Fila[0] . "'>Actualizar</a></td>");
        //print("<td class='p-3'> <a href='../remove/F" . $tableName . ".php" . "?$PK=" . $Fila[0] . "'>Eliminar</a></td>");
        print("<td class='p-3'>");
        print("<a href='../update/U" . $tableName . ".php" . "?$PK=" . $Fila[0] . "'>");
        print('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
        <path d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z"/>
        </svg>');
        print("Actualizar");
        print("</a>");
        print("<a href='../remove/F" . $tableName . ".php" . "?$PK=" . $Fila[0] . "'>Eliminar</a>");
        print("</td>");
        print("</tr>");
    }

    print("</table>");
}
