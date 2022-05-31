<?php
function manejarArchivoImagen($file, $dir)
{
    $currentDirectory = getcwd();
    $uploadDirectory = "/img/$dir/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg', 'jpg', 'png']; // These will be the only file extensions allowed 

    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmpName  = $file['tmp_name'];
    $fileType = $file['type'];
    $tmp = explode('.', $fileName);
    $fileExtension = end($tmp);

    $uploadPath = dirname(__DIR__, 2) . $uploadDirectory . basename($fileTmpName) . '.' . $fileExtension;

    if (!in_array($fileExtension, $fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
            return $uploadDirectory . basename($fileTmpName) . '.' . $fileExtension;
        } else {
            echo "An error occurred. Please contact the administrator.";
            return '';
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}

function manejarArchivoSeguridad($file, $row)
{
    $currentDirectory = getcwd();
    $uploadDirectory = "/tmp/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['txt']; // These will be the only file extensions allowed 

    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmpName  = $file['tmp_name'];
    $fileType = $file['type'];
    $tmp = explode('.', $fileName);
    $fileExtension = end($tmp);

    $uploadPath = dirname(__DIR__, 2) . $uploadDirectory . basename($fileTmpName) . '.' . $fileExtension;

    if (!in_array($fileExtension, $fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a TXT file";
    }

    if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            $key = file_get_contents($uploadPath, true);
            $key = trim($key);
            if ($row[6] == $key) {
                unlink($uploadPath);
                return 1;
            }
            return 0;
        } else {
            echo "An error occurred. Please contact the administrator.";
            return 0;
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}
