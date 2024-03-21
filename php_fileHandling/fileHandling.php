<?php
//     $file = fopen('myFile.txt', 'r');
// echo "<ul>";
//     while (!feof($file)) {
//         $line = fgets($file);
//         echo "<li> $line </li>";
//     }
// echo "</ul>";
//     fclose($file);


    $file = fopen('myFile.txt', 'r+');
    echo fread($file, filesize('myFile.txt'));
    fclose($file);

echo "<br><br>";

    $fileName = 'php_Forms/uploads/Middlesex.jpg';
    if (is_uploaded_file($fileName)) {
        echo "This file is uploaded via a HTTP Post";
    }
    else {
        echo "This file is not uploaded via a HTTP Post";
    }
?>