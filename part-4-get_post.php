<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part-4-get_post.php" method="get">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
    
</body>
</html>
<?php
    // echo $_GET["username"] . "<br>"; //adding <br> in both ways work
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>"; //this is more flexible as kinda works like a placeholder
?>


<!-- <body>
    <form action="part-4-get_post.php" method="post"> //using same thing using POST
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
    
</body>
</html>
<?php
    // echo $_POST["username"] . "<br>"; //adding <br> in both ways work
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>"; //this is more flexible as kinda works like a placeholder
?> -->





<!-- $_GET=  Data is appended to the url
        NOT SECURE
        Char limit
        Bookmark is possible w/ values
        GET requests can be cached
        Better for a search page


$_POST= Data is packaged inside the body of the HTTP request
        MORE SECURE
        No data limit
        Cannot Bookmark
        GET requests are not cached
        Better for submitting credentials -->