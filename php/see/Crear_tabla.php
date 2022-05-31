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
            if (preg_match("/\.jpg$|\.png|\.gif/i", $Fila[$i])) {
                print("<td class='p-3'>");
                print("<a class='btn btn-outline-primary mr-4'target='_blank' href='/./proyecto_final");
                print($Fila[$i] . "'>");
                print('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
              </svg>');
                print("Ver imagen</a>");
                print("</td>");
            } else {
                print("<td class='p-3'>" . $Fila[$i] . "</td>");
            }
        }

        # Imprimir columna de actualización
        print("<td class='p-3'>");
        print("<a href='../update/U" . $tableName . ".php" . "?$PK=" . $Fila[0] . "' class='btn btn-outline-primary mr-4'>");
        print('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
               <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
               <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
               </svg>');
        print("Actualizar");
        print("</a>");
        print("<a href='../remove/FDI" . $tableName . ".php" . "?$PK=" . $Fila[0] . "' class='btn btn-outline-danger'>");
        print('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
              <path d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z"/>
              </svg>');
        print("Eliminar");
        print("</a>");
        print("</td>");
        print("</tr>");
    }

    print("</table>");
}
