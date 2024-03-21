<?php
// Functions variable
    function userName($name)
    {
        return $name;
    }
    $user = userName('Alex Rehiem');
    echo $user;
    echo "<br>";

// Callback function ( A function that can be passed as an argument to another function
    // and then call within that function. )
    function teacher(){
        return "i am teacher";
    }
    $tch = "teacher";

    function main($callBack){
        echo $callBack(); // calling the functions
    }
    main($tch);





















































