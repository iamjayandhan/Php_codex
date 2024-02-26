<?php
    //ln3
    //Arithmetic operators 
    //+,-,*,/,**,%

    //Increment/decrement operators
    // ++,--

    //Operator Precedence
    // () ** * / % + -

    $a = 10;
    echo "Value of variable a is: " . $a . "<br>";
    
    $b = 5; 
    echo "Value of variable b is: " . $b . "<br><br>";
  
    //addition operator (+)
    echo "Addition: " . ($a + $b) . "<br>";
  
    //subtraction operator (-)
    echo "Subtraction: " . ($a - $b) . "<br>";
  
    //multiplication operator (*)
    echo "Multiplication: " . ($a * $b) . "<br>";
  
    //division operator (/)
    if($b != 0){
        echo "Division: " . ($a / $b) . "<br>";
    }else{
        echo "Error! Division by zero is not allowed.<br>";
    }

    $x=10;
    $y=5;
    $z=null;
    $z = $x - $y;
    echo "Difference between {$x} and {$y} is: ".($x - $y)."<br>";
    echo "Difference between {$x} and {$y} is: {$z} <br>";

    

?>  