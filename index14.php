<?php
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide ()
    //            section of reuseable code!

    function greet(){
        echo "Welcome jayandhan! <br>";
    }

    function greet2($name){
        echo "Hello {$name}! <br>";
    }

    greet();  // calling the function using its name followed by parentheses()
    greet2("Jay");   // passing a value as an argument - called parameter passing
?>