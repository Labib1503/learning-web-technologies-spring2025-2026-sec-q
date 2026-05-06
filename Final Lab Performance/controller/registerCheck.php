<?php
    require_once('../model/adminModel.php');
    $user = $_POST;
    if(registerAdmin($user)){
        header('location: ../view/login.html');
    }else{
        echo "Registration failed!";
    }
?>