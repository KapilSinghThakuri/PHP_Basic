<html>
    <body>
        <form method="POST" action="">
            <button type="submit" name="button">FuctionCall</button>
        </form>
        <?php
            if (isset($_REQUEST['button'])) {
                buttonFun();
            }
            function buttonFun()
            {
                echo "Function Called On Button Clicked !!!";
            }
        ?>
    </body>
</html>