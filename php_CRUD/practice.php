<?php
$servername = "localhost";
$username = "root";
$password = "kapil12345";
$dbname = "phpCRUD";

// Create connections with database
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Failed: " . mysqli_connect_error());

$query = "SELECT * FROM student";

try {
    $result = mysqli_query($conn, $query);

    if (!$result) {
        throw new Exception(mysqli_error($conn));
    }

    echo "<pre>";
    print_r(mysqli_fetch_all($result));
    echo "</pre>";
} catch (Exception $e) {
    echo "Query Failed: " . $e->getMessage();
}

mysqli_close($conn);
?>
