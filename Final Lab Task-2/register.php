<?php
session_start();
if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username or password!";
    }else{
        $_SESSION['user'] = [
            'username' => $username,
            'password' => $password,
            'image' => ''   

        ];
        echo "Registration successful! <a href='login.html'>Login</a>";
    }
}
?>