<?php
    // two useful php functions
    // isset() - Returns TRUE if a variable is declared and not null
    // empty() - Returns  TRUE if a variable is not declared,false,null,""

    $username = "Jayandhan";
    $username2 = null;

    echo isset($username)."<br>";   // true, so display 1
    echo isset($username2)."<br>";  //false, so display nothing!

    if (isset($username2)) {
        echo "This variable is set";
    }
    else{
        echo "This variable is NOT set";
    }

    echo "<br>";

    if (empty($username2)) {
        echo "This variable is empty";
    }
    else{
        echo "This variable is NOT empty";
    }


?>