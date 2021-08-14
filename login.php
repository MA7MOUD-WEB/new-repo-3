<?php
session_start();

if (isset($_SESSION['email'])) {
    header("location:dashboard.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle-login.php" method="post">
<input class="form-control" type="email" name="email" id="">
<br>
<input class="form-control"
 type="password" name="password" >
<br>
<button type="submit" name="submit">login</button>
    </form>
</body>
</html>