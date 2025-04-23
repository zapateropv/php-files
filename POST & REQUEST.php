<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>  
</body>
</html>

<?php

// $_GET, $_POST = special variable used to collect data from an HTML form
//                data is sent to the file in the action attribute of <form>

/* $_GET = Data is appended to the url
           -not secure
           -char limit
           -Bookmark is possible w/ values
           -GET requests can be cached
           -Better for a search page
          
           
   $_POST = Data is packaged inside the body of the HTTP request
            -more secure
            -no data limit
            -cannot bookmark
            -GET request are not cached
            -better for submitting credentials

*/


echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";



?>
