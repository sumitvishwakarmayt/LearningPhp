<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty function</title>
</head>

<body>
    <h1>Login page using isset() and empty() in php.</h1>
    <form action="isset_empty_function.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username" id=""><br>
        <label for="">Password:</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="Login" value="Login">
    </form>
</body>

</html>

<?php 

$username = $_POST["username"];
$password = $_POST["password"];


if (empty($username)){
    echo "Username is Missing.<br>";
}

elseif (empty($password)){
    echo "Password is Missing. <br>";
}

else {
    echo "Welcome {$username}.";
}


// isset() returns true if variable is declared and its value is set.
// empty() returns false if variable is not declared, or empty or null.


// echo isset($username); //return 1 because variable is declared.


//since global variable $_POST is an Associative Array, So it has Key => Value pairs as Input_Name => Input_Value respectively. 
    // foreach($_POST as $key => $value){
    //     echo "$key = $value <br>";
    // }
?>