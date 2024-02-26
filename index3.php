<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form action="index3.php" method="get" -->
    <form action="index3.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    //ln4
    /*  //SUPER GLOBAL VARIABLES - ARRAY LIKE!!
        // $_GET, $_POST = special variables used to collect data from an HTML form
        //                 data is sent to the file in the action attribute of <form>
        //                 <form action="some_file.php" method="get">
        
        //$_GET  = Data is appended to the url
        //          NOT SECURE
        //          char limit
        //          Bookmark is possible w/ values
        //          GET requests can be cached
        //          Better for a search page
        
        //$_POST = Data is packaged inside the body of the HTTP request
        //         MORE SECURE
        //         No data limit
        //         Cannot bookmark
        //         Requests are not cached
        //         Better for submitting credentials
    */


    //method="get"
    //echo $_GET["username"] . "<br>"; // . "<br>" is string concatenation!
    //echo "{$_GET["password"]} <br>"; //  Curly braces allow us to use variable names within double quotes without having to concatenate them with


    //DISADVANTAGE OF GET METHOD:
    /* 
        http://localhost:3000/index3.php?username=jayandhan&password=p%40ssw0rd
        CREDENTIALS ARE APPENDED TO URL! TOO VISIBLE (NO SECURITY)
        SO WE GO FOR POST METHOD    
    */

    //method="post"
    echo "{$_POST["username"]} <br>";
    echo $_POST["password"] . "<br>";

    //URL looks like: http://localhost:3000/index3.php
    //MORE SECURE

?>