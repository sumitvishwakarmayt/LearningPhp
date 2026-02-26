    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkboxes in Php</title>
    </head>

    <body>
        <h1>Select the foods you like for Placing the Orders!</h1>
        <br>
        <form action="checkboxes.php" method="post">
            <input type="checkbox" name="pizza" id=""> Pizzas <br>
            <input type="checkbox" name="burger" id=""> Burgers <br>
            <input type="checkbox" name="apple" id=""> Apples <br>
            <input type="checkbox" name="hamburger" id=""> Hamburgers <br>
            <input type="submit" name="proceed" value="Proceed">
        </form>
    </body>

    </html>

    <?php
    if (isset($_POST["proceed"])) {
        if (isset($_POST["pizza"])) {
            echo "You like Pizza. <br>";
        }
        if (isset($_POST["burger"])) {
            echo "You like Burgers. <br>";
        }
        if (isset($_POST["apple"])) {
            echo "You like Apples. <br>";
        }
        if (isset($_POST["hamburger"])) {
            echo "You like Hamburgers. <br>";
        }
        if (empty($_POST["pizza"])) {
            echo "You don't like Pizza. <br>";
        }
        if (empty($_POST["burger"])) {
            echo "You don't like Burgers. <br>";
        }
        if (empty($_POST["apple"])) {
            echo "You don't like Apples. <br>";
        }
        if (empty($_POST["hamburger"])) {
            echo "You don't like Hamburgers. <br>";
        }
        echo "<a href='getPostExercise.php'><button> Proceed to Checkout </button></a>";
    }
    ?>