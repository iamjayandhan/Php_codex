<?php
    // array = "variable" which can hold more than one value at a time

    $food_1="apple";
    $food_2= "orange";
    $food_3 = "banana";
    $food_4 = "coconut";

    //using array
    $foods = array("apple","orange","banana","coconut");
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";

    //change element value
    $foods[0] = "pineapple";

    //push function to add value to array
    array_push($foods,"watermelon");

    //pop last element
    array_pop($foods);

    //array shift - remove at beginning
    array_shift($foods);

    //array reverse - returns new reversed array! not modifies In-Place!!
    $foods = array_reverse($foods);

    //count elements
    echo count($foods)." ";

    foreach($foods as $food){
        echo "{$food} ";
    }
?>