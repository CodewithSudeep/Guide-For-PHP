<?php

//make a form which takes username and password then check if username and password matches with of demo.txt file.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" class="src">
</head>
<body>
<form action = "" method = "post">
    <label for="username">username</label>
    <input type = "text" name = "username" id = "username" required>
    <label for="password">password</label>
    <input type = "password" name = "password" id = "password" required>
    <input type="submit" name = "submit" value = "submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["username"];
    $pass = $_POST["password"];
}
?>
    
</body>
</html>