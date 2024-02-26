<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Dynamically update the action page info!-->
    <!--using server SGB-->

    <!-- that php_self is used to get current file name-->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        username:<br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>

<?php
    // $_SERVER = SGB that contains headers, paths, and script locations.
    //            The entries in this array are created by the web server.
    //            Shows nearly everything you need to know about the current web page env.

    //SGB - Super Global Variables

    // foreach($_SERVER as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    //PHP_SELF -> vulnerable to XSS script
    /*
    enclose it with htmlspecialchars
    */

    //default request method is GET
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
        echo "HELLO";
    }
?>