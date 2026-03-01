<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Few String Functions</title>
</head>

<body>
    <h1>Below are few string functions and methods.</h1>
</body>
    <form action="stringFunctions.php" method="post">
        <label for="string" >Enter the string:</label>
        <input type="text" name="string"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
</html>

<?php
    $string = $_POST["string"];
    if(isset($_POST["submit"])){
        echo "Your entered string is {$string}. <br>";

        echo strlen($string) . "<br>"; //returns string length.
        echo strtoupper($string) . "<br>"; //turns the string characters to upper case.
        echo strtolower($string) . "<br>"; //turns the string characters to lower case.
        echo str_replace("i", "!", $string) . "<br>"; //replaces first arg with second arg in third arg.
        echo str_shuffle($string) . "<br>"; //randomly shuffles the string.
        echo strpos($string, 't') . "<br>"; //returns the position of second arg in first arg.
        $rev_string = strrev($string); //returns the reversed string.
        echo "{$rev_string}";
        echo strpos($string, 't') . "<br>"; //retuns the postion of second arg in first arg.
        echo trim($string); //removes trailing whitespaces.


    }
?>