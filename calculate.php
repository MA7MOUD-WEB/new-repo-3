<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle-user.php" method="post">
<input type="text" name="n1">

<input type="text" name="n2">


<select name="opr" >
<option value="add">+</option>
<option value="multi">*</option>
<option value="sub">-</option>
<option value="div">/</option>
</select>

<button type="submit" name="submit">add</button>
    </form>

<?php
if (isset($_GET['result'])) {
    echo $_GET['result'];
}
?>



















</body>
</html>