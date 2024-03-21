//ternary operator in PHP is a shorthand way of writing an if...else statement in a single line
// Syntax: condition ? expression1 : expression2
// It's often used for simple conditional assignments or expressions

<?php

// simple ternary example
    // $age = 20;
    // $message = ($age >= 18) ? "You are an adult" : "You are not an adult";
    // echo $message;


// nested ternary example
    $age = 10;
    $status =  ($age > 18) ? "You're adult" : (($age>=12) ? "You're Teenager" : "You're child");
    echo $status;

// null coalescing operator ??
    echo "<br>";
    echo $color = $color ?? 'This is default';
?>