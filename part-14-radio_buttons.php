<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part-14-radio_buttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> 
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <!-- all of their names are same so that they are in the same group and only one can be chosen -->
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){

        $credit_card = null; //otherwise shows error text refreshing the page each time 

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }
        if($credit_card == "Visa"){
            echo"You selected Visa";
        }
        elseif($credit_card == "Mastercard"){
            echo"You selected Mastercard";
        }
        elseif($credit_card == "American Express"){
            echo"You selected American Express";
        }
        else{
            echo"Please make a selection";
        }
        
    }

    //switching is more efficient
?>