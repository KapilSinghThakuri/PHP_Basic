<?php
    echo "<pre>";
    print_r($_SERVER['PHP_SELF']);
    echo "</pre>";
// Getting session data
    session_start();
    $user = $_SESSION['user'];
    echo "Session data is ".$user . "</br>";

// Get cookie data
    if (!isset($_COOKIE['username'])) {
        echo "Cookies data is not set!!!";
    }
    else {
        echo "Cookies data is ".$_COOKIE['username'];
    }
?>