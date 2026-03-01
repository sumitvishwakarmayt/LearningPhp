<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in Php</title>
</head>
<body>
    <h1>Creating and Exploring Functions in Php</h1>
</body>
</html>
<?php

/*
    we can define a functioon in php through the following syntax :)

    function functionName(varType arg1, varType arg2): returnType{
        // returnType and varType is not compulsary.
        return output; 
    }
*/

    function playSong($name, $age){
        echo "Happy Birthday {$name}. <br>";
        echo "Happy Birthday to you dear {$name}. <br>";
        echo "Congrats you are now {$age} years old! <br><br>";
    }

    playSong("Sumit", 21);
    playSong("Amit", 25);

//function with return statement

    function isEven($num){
        if($num%2 == 0){
            return "The given number {$num} is even.";
        }
        else{
            return "The given number {$num} is odd.";
        }
    }

    echo isEven(15) . "<br>";

//function with return type

    function divide(int $a, int $b): string{
        return "The division of {$a} and {$b} is " . $a/$b;
    }

    echo divide(3, 2);
?>