<?php
    $grade = "A";

    switch($grade){
        case "A":
            echo"You did great";
            break; //breaks need to included for single match exec, unless otherwise
        case "B":
            echo"You did good";
            break;
        case "C":
            echo"You did okay";
            break;
        case "D":
            echo"You did poorly";
            break;
        case "F":
            echo"You failed";
            break;
        default: //default choice
            echo"{$grade} is not valid";
    }
?>