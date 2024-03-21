
<?php
echo "<h1> Fetching the API data </h1>";
$api_url = 'https://stephen-king-api.onrender.com/api/books';
$response = file_get_contents($api_url);

// echo "<pre>";
// print_r($response);
// echo "</pre>";

$data = json_decode($response, true);
    // print_r($data);


$bookTitle = $data['data'];
foreach($bookTitle as $title){
    echo "Book Title : " . $title['Title'] . "  & Publish Year : " . $title['Year'] . "<br>";
    }

// foreach ($data['data'] as $book) {
//         // Accessing title within each book array
//         $title = $book['Title'];
//         echo "$title <br>";
//     }

    echo "<br><br>";

foreach ($data['data'] as $value) {
    echo  $value['Year'] . "<br>";
}

?>

<?php
    $amazonApi = 'https://www.amazon.in';
    $apiData = file_get_contents($amazonApi);

    echo "<pre>";
    print_r("$apiData");
    echo "</pre>";
?>


