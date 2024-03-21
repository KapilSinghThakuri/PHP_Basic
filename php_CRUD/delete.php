<?php

$stud_id = $_GET['id'];

include 'service/config.php';
$query = "DELETE FROM students WHERE id = {$stud_id}";
mysqli_query($conn, $query) or die('Query Unsuccessfull !!!');

header("Location: http://localhost/php_folder/php_CRUD/index.php");

mysqli_close($conn);
?>