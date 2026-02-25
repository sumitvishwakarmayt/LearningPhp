<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <form action="associativeArrays.php" method="post">
        <label for="country">Enter Country name to find its Capital:</label>
        <input type="text" name="country" id="country">
        <input type="submit" value="Find">

    </form>
</body>

</html>
<?php
$capitals = array(
    "india" => "New Delhi",
    "usa" => "Washington D.C.",
    "pakistan" => "Islamabad",
    "nepal" => "Kathmandu"
);

$keys = array_keys($capitals); // returns array with keys.
$values = array_values($capitals); //returns array with values.

// array_shift($capitals); // Deletes first element of the array.
// array_flip($capitals); // flips i.e. interchanges key value pairs.

// $reverseCapitals = array_reverse($capitals); // returns arrays with reversed order.

$country = $_POST["country"];
foreach ($capitals as $key => $value) {
    if($key == $country){
        echo "{$value}";
    };
}
/*
    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }
*/
?>