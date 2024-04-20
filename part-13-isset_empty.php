<?php
    //isset() = Returns TRUE if a variable is declared and not null
    //empty() = Returns TRUE if a variable is not declared, false, null, empty string

    $username = false;
    if (isset($username)){
        echo"This variable is set";
    }
    else{
        echo"This variable is not set";
    }

    
    echo"<br>"; 



    if (empty($username)){
        echo"This variable is empty";
    }
    else{
        echo"This variable is not empty";
    }
?>