<?php
    //ln1
    echo "Hello World! <br>";
    echo "php is fun!";

    //This is a comment!
    /* multiline comment! */


    //ln2
    // variable = a reusable container that holds data
    // String, integer,float,boolean are the types of variables in PHP.

    $name="Jayandhan";   //String Variable 
    $age=30;              //Integer Variable
    $height=5.8;         //Float/Double Variable
    $isTall=true;        //Boolean Variable
    
    echo "<br> My name is ". $name ."<br>" ;
    echo "I am ". $age ." years old.<br>" ;
    echo "My height is ". $height ." meters.<br>" ;
    echo "Am I tall? ". ($isTall ? "Yes" : "No") ."<br>" ;

    //Operators: +,-,*,/,%,++,--,==,!=,===,!==,<,>,<=,>=,&&,||,!
    //Assignment operators: +=,-=,*=/.=,%=> etc.

    $x=9;                     
    $y=4;
    $sum=$x+$y;    //Addition
    $diff=$x-$y;   //Subtraction
    $product=$x*$y; //Multiplication
    $quotient=$x/$y;   //Division
    $remainder=$x%$y;  //Modulus(Remainder)
    $incrementedValue=$x++; //Post Incrementation
    $decrementedValue=$x--; //Pre Decrementation
    
    $amt = 10.30;
    echo "the bill: \${$amt} <br>"; 
    
    
    
    echo $name;   //outputs: Jayandhan
    echo "Hello {$name} <br>";  //using curly braces to print out

?>
