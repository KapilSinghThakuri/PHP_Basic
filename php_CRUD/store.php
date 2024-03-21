<?php

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
$query = " INSERT INTO students(name,age, address, cid)
        VALUES( '{$sname}','{$sage}','{$saddress}','{$scourse}' ) ";
mysqli_query($conn, $query) or die("Failed Query !!!");

header("Location: http://localhost/php_folder/php_CRUD/index.php") or die('Redirect Unsuccessfull !!!');

mysql_close($conn);

?>