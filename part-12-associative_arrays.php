<?php
    //associative array = An array made of key=>value pairs

    $capitals = array("USA"=> "Washington DC",
                        "Japan"=> "Kyoto",
                        "South Korea"=> "Seoul",
                        "India"=> "New Delhi",
                        "Bangladesh"=> "Dhaka");

    foreach($capitals as $key => $value){
        echo "{$key} --- {$value} <br>";

        $capitals["USA"] = "Las Vegas"; //updating the value of a key
        $capitals["China"] = "Beijing"; //inserting new element
        array_pop($capitals); //pops the last element
        array_shift($capitals); //remove the first element and shift others to the left by one
        $keys = array_keys($capitals); //returns a new array of the keys only
        $values = array_values($capitals); //returns a new array of the values only
        $flipped_array = array_flip($capitals); //flips the keys and values
        $reversed_array = array_reverse($capitals); //returns a new array of the reversed array
    }
?>