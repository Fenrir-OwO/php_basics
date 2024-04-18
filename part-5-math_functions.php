<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part-5-math_functions.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x); //absolute
    // $total = round($x); //round up or down
    // $total = floor($x); //round down
    // $total = ceil($x); //round up
    // $total = sqrt($x); //squareroot
    // $total = pow($x, $y); //power(base,power)
    // $total = max($x, $y, $z); //maximum
    // $total = min($x, $y, $z); //minimum
    // $total = pi(); //pi is a pi is a pi
    // $total = rand(1,6); //randomize(minimum, maximum); only rand() limit is upto over 2 billion 
    echo $total;
?>