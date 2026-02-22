<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Let's Study Get Post Php Methods Before Placing Order :) </p>
    <form action="getPostMethod.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Login">
        
    </form>
    <br>
    <a href="getPostExercise.php">
        <button>Let's Order pizza First?</button>
    </a>
    <br>
</body>
<?php
    echo $_POST["username"];
    echo "<br>";
    echo $_POST["password"];

    /*
    The action attribute of the form tag tells the browser where to submit the form data upon click of submit button (input type=submit).
    Method attribute tells the way of sending the form data with througj post way or get way.
    There are two methods 1- get and 2- post.

    get method makes the data public in the url upon submission and it can be cached. There's no security. Used for Search Pages.
    post method submits the data without getting the data revealed in the browser. It's more secure and used for submitting credentials such as on Login Pages.
     */
?>
</html>