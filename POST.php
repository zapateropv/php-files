<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">   
    </form>  
</body>
</html>

<?php

// $_GET, $_POST = special variable used to collect data from an HTML form
//                data is sent to the file in the action attribute of <form>


$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = $price * $quantity;

echo "You have ordered {$quantity} x {$item}/s<br>";
echo "Total is \$ {$total}";
?>
