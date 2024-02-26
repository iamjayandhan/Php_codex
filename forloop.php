<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forloop.php" method="POST">
        <label>Enter a number: </label>
        <input type="text" name="number">
        <input type="submit" name="start">
    </form>
</body>
</html>

<?php
    $end = $_POST["number"];

    for($i=1;$i<=$end;$i++){
        echo $i." ";
    }

?>