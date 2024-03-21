<?php
    $name = "Ram Bahadur Bamjan";
    echo "This is outside goto Statement; <br>";

    // Goto statement skips the line of code to be executed and jumps when it's called, then resumes execution.
//     goto start;

//     $para = "This is inside the goto Statement!";
//     echo $para;

// start:
//     echo "This is jump to line no 11!";

    $x = 10;
    if ($x == 10) {
        goto jump;
    }
    echo "This is inside goto Statement.";


jump:
    echo "Goto Statement jumps executions of code between line 15 to 20.";
    echo "<br>";
// GoTo Statement in for loop
    for ($i=1; $i <=10 ; $i++) {
        echo "$i <br>";

        if( $i == 5){
            goto skip;
        }
    }
    skip:
        echo "The loop is break by GoTo Statement";

echo "<br>";
// GoTo Statement in while loop
    $num = 1;
    while ($num <= 10) {
        echo $num . "<br>";
        $num++;

        if($num == 7){
            goto stop;
        }
    }
    stop:
        echo "Goto Statement stopped while loop";

?>
