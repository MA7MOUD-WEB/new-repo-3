<?php
session_start();

if (isset($__POST['submit'])) {
    $email= $_POST['email'];
    $password= $_POST['password'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $userName= $_POST['userName'];    
    
    /* 
    دى بتحل محل الفاليدات اللى انا عملته لليوزرنيم 
    print_r($post);
    extract($post);
    */ 
    
    $Errors=[];
    if (empty($userName)) {
        $Errors[]='userNme is required';
    }elseif(is_numeric($userName) || ! is_string($userName)){
        $Errors[]='must be  string';
    }elseif(strlen($userName)<5 || strlen($userName)>50){
        $Errors[]='minlen 5 & maxlen 50';
    }
    
    if (empty($email)) {
        $Errors[]='email is required';
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $Errors[]='must be valid email';
    }
    
    if (empty($gender)) {
        $Errors[]='gender is required';
    }elseif(! in_array($gender,['male','female'])){
        $Errors[]='must be male or female';
    }
    
    if (empty($age)) {
        $Errors[]='age is required';
    }elseif(! is_numeric($age)){
        $Errors[]='age must be number';
    }elseif($age < 5 || $age >65){
        $Errors[]='age between [5-65]';
    }
    
    if (empty($password)) {
        $Errors[]='password is required';
    }elseif(strlen($password)<8 || strlen($password)>50){
        $Errors[]='length [8-50]';
    }
    
    if (empty($Errors)) {
        print_r($_POST);
    }else{
        print_r($Errors);
    }
    }


    if (empty($Errors)) {
        print_r($Errors);
    }else {
        print_r($Errors);
        $_SESSION['Errors']=$Errors;
        header("location:form,php");
    }