<?php 
    //string functions
    $username = "jayandhan  jd";
    $number = "123-456-7890";
    
    echo strtolower($username)."<br>";
    echo strtoupper($username)."<br>";
    echo trim($username)."<br>";
    echo str_pad($username,20,"0")."<br>";
    echo str_replace("-","",$number)."<br>";
    echo strrev($username)."<br>";
    echo str_shuffle($username)."<br>";
    echo strcmp($username,"jayandhan jd")."<br>";
    echo strlen($username)."<br>";
    echo strpos($username,"a")."<br>";
    echo substr($username,0,9)."<br>"; // begin,end
    echo substr($username,10)."<br><br> Explode:<br>"; //start - last

    $fullname = explode(" ",$username);  //split str with str
    //use explode when string declared like "jayandhan jd"
    //use implode when string is declared like array("jayandhan","jd")

    foreach($fullname as $name){
        echo $name." ";
    }

    echo "<br>Implode:<br>";

    $name_sample = array("wolverine","deadpool");
    $fullname2 = implode(" ",$name_sample); //join array elements with str
    echo $fullname2;

?>