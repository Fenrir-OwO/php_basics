<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part-4-get_post_practice.php" method="post">
        <label>Quantity: </label><br>
        <input type="number" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 3.99;
    $quantity = $_POST["quantity"]; //getting it and saving as local variable, not must
    $total = null;

    $total = $price * $quantity;
    echo"You have ordered {$quantity} x {$item}/s<br>";
    echo"Your total amount is \${$total}"
?>