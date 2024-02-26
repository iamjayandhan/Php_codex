<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index12.php" method="POST">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>    
</body>
</html>

<?php
    /*Radio buttons - using if statements
    
    // if(isset($_POST["confirm"])){
        
    //     if(isset($_POST["credit_card"])){
    //         $credit_card = $_POST["credit_card"];

    //         if($credit_card == "Visa"){
    //             echo "You selected Visa";
    //         }
    //         else if ($credit_card == "Mastercard"){
    //             echo "You selected Mastercard";
    //         }
    //         else{
    //             echo "You selected American Express";
    //         }
    //     }
    //     else{
    //         echo "Please make a selection";
    //     }

    // }  */
    


    //using switch

    

    if(isset($_POST["confirm"])){

        $credit_card = null;// without this, switch wont work!😅

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card){
            case "Visa":
                echo "You selected Visa";
                break;
            case "Mastercard":
                echo "You selected Mastercard";
                break;
            case "American Express":
                echo "You selected American Express";
                break;
            default:
                echo "Please make a selection";
                break;
        }
    }



?>