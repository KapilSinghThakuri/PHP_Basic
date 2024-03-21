<?php
//  PHP call by value, actual value is not modified if it is modified inside the function.
    // function adder($name)
    // {
    //     $name = "Ram Bahadur";
    // }
    // $newName = "Hari Bahadur";
    // adder($newName);
    // echo "$newName";


// PHP call by reference, actual value is modified if it is modified inside the function.
// In such case, you need to use & (ampersand) symbol with formal arguments.
// The & represents reference of the variable.
    function adder(&$name)
    {
        $name = "Sam Bahadur";
    }
    $newName = "alex Bahadur";
    adder($newName);
    echo "$newName";
?>