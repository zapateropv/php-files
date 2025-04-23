<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php

$radius = $_POST["radius"];
$radiusTotal = pi() * ($radius * $radius);
$radiusTotal = round($radiusTotal, 2);

$circumferenceTotal = 2 * pi() * $radius;
$circumferenceTotal = round($circumferenceTotal, 2);

echo "The area of circle is {$radiusTotal}<br>";
echo "The circumference of circle is {$circumferenceTotal}";

?>
