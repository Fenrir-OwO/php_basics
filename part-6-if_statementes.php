<?php
    $age = 21;
    if ($age >= 18){
        echo "You may enter";
    }
    elseif ($age == 0){
        echo "Go home kid";
    }
    elseif ($age >= 100){
        echo "you are too old to enter this site";
    }
    else{
        echo "you were just born";
    };
?>
<?php
    $adult = true;

    if ($adult){ //by default "if($adult)" works as "if($adult = true)"
        echo "you may enter this site";
    }
    else {
        echo "you must be an adult to enter";
    }
?>

<?php
    $hours = 40;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0){
        $weekly_pay = 0;
    }
    elseif ($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "you made \${$weekly_pay} this week";
?>