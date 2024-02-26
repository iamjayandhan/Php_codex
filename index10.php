<?php
    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array(
        "USA"=>"Washington D.C.",
        "Japan"=>"Kyoto",
        "South Korea"=>"Seoul",
        "India"=>"New Delhi");
    
    //modify value of key
    $capitals["USA"] = "Las Vegas";

    //add new key value pair
    $capitals["China"] = "Beijing";

    //pop last element
    array_pop($capitals);

    //shift - remove first element
    array_shift($capitals);

    //get all keys
    $capitals_keys = array_keys($capitals);

    //get all values
    $capitals_values = array_values($capitals);

    foreach($capitals as $key =>$value){
        echo "{$key} => {$value} <br>";
    }
    echo "<br>";

    foreach($capitals_keys as $key){
        echo "{$key} <br>";
    }
    echo "<br>";

    foreach($capitals_values as $value){
        echo "{$value} <br>";
    }
    echo "<br>";

    //array_flip flips place of keys and values
    $capitals = array_flip($capitals);
    print_r($capitals);
    echo "<br>";

    foreach($capitals as $key => $value){
        echo  "$key => $value<br>"; 
    }


    //reverse
    array_reverse($capitals);
    //count  elements in an array
    echo count($capitals);
?>