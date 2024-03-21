<?php
    $sid = $_REQUEST['sid'];
    $sname = $_REQUEST['sname'];
    $sage = $_REQUEST['sage'];
    $saddress = $_REQUEST['saddress'];
    $scourse = $_REQUEST['scourse'];

    $servername = "localhost";
    $username = "root";
    $password = "kapil12345";
    $dbname = "phpCRUD";
    // Create connections with database
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed !!!");

    $query = "UPDATE students SET
                name = '{$sname}',
                age = '{$sage}',
                address = '{$saddress}',
                cid = '{$scourse}'
                WHERE id = {$sid}";
    $result = mysqli_query($conn, $query) or die("Query Unsuccessfull !!!");

    header("Location: http://localhost/php_folder/php_CRUD/index.php") or die('Redirect Unsuccessfull !!!');
    mysqli_close($conn);
?>