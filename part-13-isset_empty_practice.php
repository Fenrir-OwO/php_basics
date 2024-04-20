<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part-13-isset_empty_practice.php" method="post">
        <label>username: </label> <br>
        <input type="text" name="username"> <br>
        <label>password: </label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="Log in"> <br>        
    </form>
</body>
</html>

<?php
    foreach($_POST as $key => $value){ //This uses the inputs as an associative array and stores
        echo"{$key} = {$value} <br>";
    }

    if(isset($_POST["submit"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"Please enter a valid username";
        }
        elseif(empty($password)){
            echo"Please enter a password";
        }
        else{
            echo"Welcome ya dog {$username}";
        }
    }
    
    
?>