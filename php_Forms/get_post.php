<?php
    echo "<h1>HTTP Request (GET, POST & REQUEST)</h1> ";
    echo "Username : " . $_POST['username'] . "<br>";
    echo "Password : " . $_POST['password'] . "<br>";

    // echo "Username & Password : " . $_REQUEST['username'] . ", " . $_REQUEST['password'];

    if ($_REQUEST) {
        foreach ($_REQUEST as $key => $value) {
            echo $key . " is " . $value . "<br>";
        }
    }

?>