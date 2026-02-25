<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Let's Explore some Math Functions and your Pizza Size before Ordering it!</h1>
    <form action="mathFunctions.php" method='post'>
        <label>Enter Radius of your Desired Pizza:</label>
        <input type="text" name="radius">
        <br>
        <label for="x">Enter a number X:</label>
        <input type="text" name="x" id="x">
        <br>
        <label for="y">Enter a number Y:</label>
        <input type="text" name="y" id="y">
        <br>
        <label for="z">Enter a number Z:</label>
        <input type="text" name="z" id="z">
        <br>
        <input type="submit">
    </form>
    <br>
    <?php

    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    echo "The circumference is: {$circumference}cm. <br>";
    echo "The area is: {$area}cm<sup>2</sup>. <br>";
    echo "<h2>These are few Computation outputs on X, Y, and Z :)</h2>";

    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];

    $roundedX = round($x);
    $ceilX = ceil($x);
    $floorX = floor($x);
    $max = max($x, $y, $z);
    $min = min($x, $y, $z);
    $absX = abs($x);
    $sqrtX = sqrt($x);
    $powerXY = pow($x, $y);

    echo "The value of x is {$x} <br>";
    echo "The value of y is {$y} <br>";
    echo "The value of z is {$z} <br> <br>";
    echo "The absolute value of x is: {$absX} <br> <br>";
    echo "The rounded x is {$roundedX} <br>";
    echo "The rounded up x is {$ceilX} <br>";
    echo "The rounded down x is {$floorX} <br> <br>";
    echo "The max of three inputs is {$max} <br>";
    echo "The min of three inputs is {$min} <br><br>";

    echo "The square root of x is {$sqrtX}<br>";
    echo "The x raises to y is {$powerXY}<br>";


    ?>

</body>

</html>