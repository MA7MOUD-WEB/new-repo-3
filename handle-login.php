<?php
session_start();

if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $_SESSION['email']=$email;
    header("location: dashboard.php");

}else {
    header("location: login.php");
}
?>