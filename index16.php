<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index16.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

    // FILTER INVALID DATA
    
    // if(isset($_POST["login"])){

    //     $username = $_POST["username"];

    //     echo "Hello {$username}";
    // }

    //PROBLEM if not input is not sanitized - XSS scripting
    //<script>alert("Virus!!")</script>


    if(isset($_POST["login"])){
        //if special char, then it simply prints it!
        //thus wont be executed!
        
        //sanitizing the user input using PHP filter_var function 
        //Hello &#60;script&#62;alert(&#34;Hello joker&#34;)&#60;/script&#62; - from page source
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        //filter out all chars in given input - accept only numbers!
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        //filter email
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}\nYou are {$age} years old!\nYour email {$email }";
    }
?>