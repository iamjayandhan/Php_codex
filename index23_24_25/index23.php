<?php
    // 1. MySQLi Extension
    // 2. PDO (PHP Data Objects)
    include("database.php");


    $username = "Devaraj";
    $password = "devaraz123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (users,password) 
            VALUES ('$username','$hash')";

    //pass query to connection
    try{
        mysqli_query($conn,$sql);
        echo "User is now registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";        
    }

    //TO CLOSE DB CONNECTION
    mysqli_close($conn);
?>
