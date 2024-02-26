<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page<br>
    <!-- <a href="index20.php">This goes to the Login page</a><br>     -->
    <form action="home.php" method="POST">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"]."<br>";
    
    if(isset($_POST["logout"])){
        //destroy session
        session_destroy();

        //redirect to login page!
        header("Location:index20.php");
    }

?>