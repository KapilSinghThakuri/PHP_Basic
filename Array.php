<?php

// Converting array to string emplode()
    $user = ['john doe', 10, 'usa', 999.34];
    echo implode(' | ', $user);

echo "<br>";


// Index Array
    // $indexArray = ["Alex","John","Sankar"];
    // for($i=0; $i<count($indexArray); $i++){
    //     echo "$indexArray[$i]";
    // }
    // foreach($indexArray as $value){
    //     echo $value;
    // }

    echo "<br>";
// Associative Array (it store key value pairs)
    // $assocArray = ["name"=> "Ram", "age"=> 23 , "salary" => 999.77];
    // By Foreach loop
    // foreach ($assocArray as $key => $value) {
    //     echo "$key : $value <br>";
    // }

    // By for loop (The array_keys() function is used to Returns all the keys of an array,
    // and store them in the array $data. This step prepares an array of data that will be used for iteration.)
    // $data = array_keys($assocArray);
    // $indCount = count($data);
    // for ($i=0; $i < count($assocArray); $i++) {
    //     $key = $data[$i];
    //     $value = $assocArray[$key];
    //     echo "$key - $value <br>";
    // }

// Multidimensional Array
    $multiArray = [["Jonty","Nepal","20"],["Bhim","India","25"]];

    // foreach($multiArray as $innerArray){
    //     foreach($innerArray as $value){
    //         echo "$value" . " ";
    //     }
    // }
    // echo "<br>";

    echo "<table style='border: 1px solid green;'>";
    for ($i=0; $i <count($multiArray) ; $i++) {
        echo "<tr>";
        for ($j=0; $j <count($multiArray[$i]) ; $j++) {
            echo "<td style='border: 1px solid blue;'>";
            echo $multiArray[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


// JSON (JavaScript Object Notation) - Used for data exchange and store
    $jsonData = '{
    "results" : {
        "author" : "Ram&Laxman",
        "books" : ["Laxiii", "Ramii"],
        "price" : { "lolita" : ["Rs999","Rs777"] }
        }
    }';

    // Decode the JSON data into an associative array
    $data = json_decode($jsonData, true);

    // Extract author's name and books from the decoded data
    $author = $data['results']['author']; // Extract author
    $books = $data['results']['books'];   // Extract books
    $price = $data['results']['price']['lolita'];

    // Display author's name
    echo "Author: $author<br>";

    // Display list of books
    echo "Books:<br>";
    foreach ($books as $book) {
        echo "- $book<br>";
    }
    foreach ($price as $value) {
        echo "Price : $value ";
    }

?>







