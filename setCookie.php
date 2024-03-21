<?php
// Setting Session
    session_start();
    $_SESSION['user'] = "Alex Reaim";
?>
<html>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="ENTER YOUR NAME">
        <button type="submit" name="cookieBtn" value="setCookie">Set Cookies</button>
        <button type="submit" name="cookieBtn" value="deleteCookie">Delete Cookies</button>
    </form>
    <?php
        if (isset($_REQUEST['cookieBtn'])) {
            if ($_REQUEST['cookieBtn'] == "setCookie") {
                $cookie_value = $_REQUEST['username'];
                setcookie('username',$cookie_value,time()+(60*60),'/');
                echo "Cookies set success !!!";
            }
            else{
                echo "Cookies is not set !!!";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";

            if ($_REQUEST['cookieBtn'] == "deleteCookie") {
                $cookie_value = $_REQUEST['username'];
                setcookie('username',$cookie_value,time()-(60*60),'/');
                echo "Cookies is deleted successfully !!!";
            }
            else{
                echo "Cookies is not deleted !!!";
            }
        }

            echo "<br>";
            echo "<br>";
            echo "<br>";

        echo "Cookies data is ". $_COOKIE['username'];
    ?>
</body>
</html>