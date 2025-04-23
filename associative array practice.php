<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>


<?php
// associative array = an array made of key => value pairs

$capitals = array("USA" => "Washington",
                  "Japan" => "Tokyo",
                  "South Korea" => "Seoul",
                  "Vietnam" => "Hanoi");
                  


$capital= $capitals[$_POST["country"]];

echo $capital;
?>
