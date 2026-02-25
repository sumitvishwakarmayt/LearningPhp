<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in Php</title>
</head>
<body>
    <form action="arrays.php" method="post">
        <h1>Program to Add or Remove Items from Arrays!</h1>
        <label for="ItemsToAdd">Enter Food Items to Add:</label>
        <input type="text" name="ItemsToAdd" id="ItemsToAdd">       
        <br>
        <label for="ItemsToRemove">Enter Food Items to Remove:</label>
        <input type="text" name="ItemsToRemove" id="ItemsToRemove">
        <br>
        <input type="submit" value="Submit"><br><br>
    </form>
    <a href="/associativeArrays.php"><button>Explore Associative Arrays?</button></a>
    <br>
    <br>
</body>
</html>
<?php
    $foods = array("Apple", "Banana", "Orange", "Papaya");
    echo "The food items you have are as follows: <br>";
    
    $foodItem = $_POST["ItemsToAdd"];

    // array_push($foods, $foodItem); //to add items in last.
    // array_pop($foods); //Pop Last Element.

    echo $foods[0] . "<br>"; // to Access or Modify Single Elements.

    foreach ($foods as $food){
        echo "$food" . "<br>" ;
    }
    echo count($foods); //returns element count of arrays.
?>