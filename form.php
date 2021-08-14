

<?php

session_start();

if (isset($_SESSION['Errors']) {
    foreach($_SESSION['Errors']as $value){
        echo "$value <br>";
    }
}

unset($_SESSION['Errors']);


?>

<?php
include_once "header.php";
?>


<form  action="handle-user.php" method="post">

<input class="form-control" placeholder="userName" type="text" name="userName">
<br>
<input class="form-control" placeholder="age" type="text"  name="age">
<br>
<input type="radio" value="male"  name="gender" checkdate>male
<input type="radio" value="female"  name="gender">female
<br>
<input class="form-control" placeholder="password" type="password"  name="password">
<br>
<input class="form-control" placeholder="email" type="text"  name="email">
<br> 
<button type="submit" name="submit">register</button>
</form>



