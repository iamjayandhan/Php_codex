<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileloop.php" method="POST">
        <!-- <input type="submit" name="start" value="start"> -->
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php

    $seconds = 0;
    $isrunning = True;
    
    while($isrunning){

        if(isset($_POST["stop"])){
            $isrunning = false;
        }
        else{
            $seconds++;
            echo $seconds . " ";
        }
    }

?>