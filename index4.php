<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index4.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    //Math related functions
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;

    //$total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x,$y);
    // %total = sqrt($x);
    // $total = max($x,$y,$z);
    // $total = min($x,$y,$z);
    // $total = pi(); // prints 3.14
    // $total = rand(1,6); // generate random number from 1 to 6
     

    echo $total;
?>