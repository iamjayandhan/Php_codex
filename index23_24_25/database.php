<?php
    $server = "localhost";
    $username = "root";
    $password = "killer";  // Change this to your new password
    $database = "businessdb";
    $conn = "";

    // $conn = mysqli_connect($db_server,
    //                         $db_user,
    //                         $db_pass,
    //                         $db_name);

    
    try{
    $conn = new mysqli($server, $username, $password, $database,3308) or die("not connected");
    // echo "connected";
    }
    catch(mysqli_sql_exception){
        echo "Could not connect <br>";
    }

    /*
    TO CHECK WHEATHER THE DB CONNECTIVITY IS PRESENT
    ALTERNATIVE TO TRY CATCH BLOCK

    if($conn){
        echo "Database connected";
    }
    else{
        echo "Connection may not be made";
    }
    */
?>
