<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcRadius.php" method="POST">
        <label>radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate"><br>
    </form>
</body>
</html>

<?php
    $r = $_POST["radius"];
    //$pi = pi();
    $circumference = 2 * pi() * $r;
    $circumference = round($circumference,2);

    $area = pi() * pow($r,2);
    $area = round($area,2);

    $volume = 4/3* pi() * pow($r,2);
    $volume = round($volume,2);

    echo "The Circumference of circle is {$circumference}cm <br>";
    echo "The Area of circle is {$area}cm^2 <br>";
    echo "The Volume of circle is {$volume}cm^3 <br>";
?>