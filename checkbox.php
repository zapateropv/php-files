<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="taco">
        taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php


    if(isset($_POST["submit"]))
    {
       $foods = $_POST["foods"];

       foreach($foods as $food)
       {
        echo $food;
       }
    }
?>
