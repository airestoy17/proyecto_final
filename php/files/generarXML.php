<?php
function generarXML($Result, $name){
    $i = 0;
    $PK = '';
    $Fila = mysqli_fetch_array($Result, MYSQLI_BOTH);
    $uploadPath = dirname(__DIR__, 2) . "/data/" . $Fila[0] . $Fila[1] . '.' . 'xml';
    //print($uploadPath);
    $text = '';
    $text = $text . "<xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\n";

    while ($finfo = mysqli_fetch_field($Result)) {
        #$tableName = $finfo->table;
        if ($i == 0) {
            $PK = $finfo->name;
            $text = $text . "<" . $name . " " . $finfo->name . "=" . "'$Fila[$i]'" . ">\n";
        } else {
            $text = $text . "<" . $finfo->name . ">" . $Fila[$i] . "</" . $finfo->name . ">\n";
        }
        $i++;
    }

    $text = $text . "</" . $name . ">";
    file_put_contents($uploadPath, $text);
}
?>