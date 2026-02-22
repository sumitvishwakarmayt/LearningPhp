<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Pizza</title>
</head>
<body>
    <h1>So here we order the Pizza for youh!</h1>
    <form action="getPostExercise.php" method="post">
        <label >Quantity</label>
        <input type="text" name="Quantity">
        <input type="submit" value="Phle Price Jaan Lo!">
    </form>
    <?php
        $price = 4.5;
        $qty = $_POST["Quantity"];
        $finalPrice = $price*$qty;
        echo "The final price for {$qty} pizzas is <b>\${$finalPrice}</b>!"; 
        if ($qty = null){

        } 
    ?>
</body>
</html>