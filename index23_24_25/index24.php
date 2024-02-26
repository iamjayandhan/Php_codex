<?php
    include("database.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    //value in $result is object from db
    //TO FIND HOW MAY ROWS ARE RETURNED
    if(mysqli_num_rows($result) > 0){   
        
        //RETURNS NEXT AVAILABLE ROW INSIDE OBJECT 
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] ."<br>";   //accessing by column name
            echo $row["users"] . "<br>";
            echo $row["reg_data"] . "<br>";
            echo "<br>";
        };
    }
    else{
        echo "No user data found";
    }

    mysqli_close($conn);
?>