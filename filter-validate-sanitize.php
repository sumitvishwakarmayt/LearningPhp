<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validations and Sanitization in Php</title>
</head>
<body>
    <form action="filter-validate-sanitize.php" method="POST">
        <label for="email">Username:</label>
        <input type="text" name="email"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Submit"><br>

    </form>
    
</body>
</html>
<?php
echo "Will Explore Filter Input Function @4th March";
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;
    echo $password;

    


?>