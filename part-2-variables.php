<?php
    $name = "Mridul";
    $food = 'pizza';
    $email = "fake@email.com";

    $age = 22;
    $users = 50;
    $quantity = 5;

    $gpa = 3.1;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = false; //nothing is displayed when false, it means 0
    $girlfriend = false;
    $life = true; //displayes 1 when true

    echo "Hello {$name} <br>";
    echo "{$name} really likes {$food}<br>";
    echo "{$name}'s mail is {$email}<br>";
    echo"{$name} is {$age} years old<br>";
    echo"There are {$users} users online<br>";
    echo"{$name}'s GPA is {$gpa}<br>";
    echo"{$name} orders a {$food} of \${$price}<br>"; //"\$" is used so that php does not confuse
    echo"The sales tax rate is: {$tax_rate}%<br>";
    echo"{$name}'s job: {$employed}, girlfriend: {$girlfriend}, life:{$life}<br><br><br>";


    $total = null;


    echo"You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo"Your total is {$total}";
?>