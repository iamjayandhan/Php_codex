<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index13.php" method="POST">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    // checkboxes
    if (isset($_POST['submit'])) {
        
        if(isset($_POST["pizza"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["hamburger"])){
            echo "You like hamburger! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco! <br>";
        }


        if(empty($_POST["pizza"])){
            echo "You DON'T like pizza! <br>";
        }
        if(empty($_POST["hamburger"])){
            echo "You DON'T like hamburger! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo "You DON'T like hotdog! <br>";
        }
        if(empty($_POST["taco"])){
            echo "You DON'T like taco! <br>";
        }
    }

?>