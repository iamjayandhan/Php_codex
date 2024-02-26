<?php
    // for loop = repeat some code a certain # of times
    $name = "Jayandhan";
    for ($i = 0; $i < 3; $i++) {
        echo "Hello {$name}<br>";
    }

    // while loop = do some code infinitely while some
    //              condition remains true
    $counter = 0;

    while ($counter < 10) {
        $counter++;
        echo $counter . "<br>";
    }

    // for each
    $marks = array(79,89,77,74,56);

    foreach($marks as $mark) {
        echo "$mark <br>";
    }

    // do while loop = do some code at least once, then check the condition. If it's false, don't execute again.
?>