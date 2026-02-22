<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Php</title>
</head>
<body>
    <?php
    echo "Hello World! <br>";
    echo "Wanna order Pizza? <br>";
//variables

$name = 'Sumit'; //string
$age = 21; //int
$price = 4.55; //float
$quantity = 3;
$total = null; //null

$online = true; //boolean -> true returns 1.
$wants_Pizza = false; //boolean -> returns nothing.

//Variable names are case sensitive.

echo "Your name is {$name} <br>";
echo "Your age is {$age} <br>";
echo "Price for Pizza is {$price} <br>";
echo "Since you want {$quantity} pizzas. <br>";
$total = $price * $quantity;
echo "So final price is \${$total}. <br>"; //backslash for special character.
echo "Online status: {$online} <br>";
echo "Wants Pizza: {$wants_Pizza} <br>";

//Arithmatics in Php
$x = 5;
$y = 10;
$calculation = $x ** $y;
$x++; //increment and decrements
$y++;
echo "The calculation is {$calculation} <br>";
echo "Increment of x is {$x} <br>";
echo "Decrement of y is {$y} <br>";
?>
<br>
<a href = "getPostMethod.php">
<button>Order now</button>
</a>


</body>
</html>