<?php
    $foods = array("apple", "banana","orange");

    echo $foods[0]; //the whole array cannot be accessed at once
    $foods[0] = "coconut"; //Change array index element
    array_push($foods, "peach", "qiwi"); //push at the end of array
    array_pop($foods); //pop the last element
    array_shift($foods); //remove the first element and shift others to the left by one
    $reversed_foods = array_reverse($foods); //returns a new array doesn't reverse the original array
    echo count($foods); //count elements of an array

    foreach($foods as $food){ //iterate through the whole array
        echo $food . "<br>";
    }

    
?>