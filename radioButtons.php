<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Card Selection Page Using Radio Buttons in Php</h1>
    <form action="radioButtons.php" method="post">
        <input type="radio" name="credit_card" value="Visa" id=""> Visa <br>
        <input type="radio" name="credit_card" value="MasterCard" id=""> MasterCard <br>
        <input type="radio" name="credit_card" value="American Express" id=""> American Express <br>
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>
<?php
//to remove initial undefined warning.
if (!isset($_POST["credit_card"])) {
    echo ("Please select a card.");
} 

else {
    $selectedCard = $_POST["credit_card"];
    echo "You have selected {$selectedCard}. <br>";
    echo "<a href='#'><button>Proceed to Checkout</button></a>";
}
?>