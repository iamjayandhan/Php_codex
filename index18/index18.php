<?php
    // include() = Copies the content of a file (php/html/text)
    //              and includes it in your php file.
    //              Sections of our website become reusable
    //              Changes only need to be made in one place

    //helps in resusability
    //change only in one place, it reflects everywhere it is used!
    include("header.html");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home Page<br>
    Stuff about your home page go here<br>
</body>
</html>

<?php
    include("footer.html");
?>