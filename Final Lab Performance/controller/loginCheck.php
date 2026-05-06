<?php
    require_once('../model/adminModel.php');
    $user = $_POST;
    if(loginAdmin($user)){
        setcookie('status', 'loggedin');
        header('location: ../view/home.php');
    }else{
        header('location: ../view/login.html');
    }
?>