<?php

    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and
    //          other non-sensitive data

    //create a cookie
    //cookies are stored like associative array!
    //key and value pair

    setcookie("fav_food","pizza",time()+86400,"/"); //86400s for a day
    setcookie("fav_drink","coffee",time()+(86400*2),"/");
    setcookie("fav_desert","ice cream",time()+(86400*3),"/");

    //delete the cookie - set time to -0
    // setcookie("fav_food","pizza",time()-0,"/"); 
    // setcookie("fav_drink","coffee",time()-0,"/");
    // setcookie("fav_desert","ice cream",time()-0,"/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}<br>";
    }

    //interact with user based on stored cookie!
    if(isset($_COOKIE["fav_food"])){
        echo "BUT SOME {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "I don't know your favourite food";
    }

?>