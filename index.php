<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action= "index.php" method="get">
        <input type="text" name="userName" placeholder="User Name"><br>
        <input type="password" name="password"placeholder="Password"><br>
        <input type="submit" value="Log in" name="submit">   
   </form>
</body>
</html>

<?php

    if($_GET["userName"] == "thanky" &&  $_GET["password"] == 123456)
    {
        echo "corret";
    }
    else{
        echo "User Name or password isn't math ";
    }

?>