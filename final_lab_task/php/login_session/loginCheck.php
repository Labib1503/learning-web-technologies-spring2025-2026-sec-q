<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "null username or password!";
        }else {

            if($username == $password){
                $_SESSION['status']= true;
                header('location: home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        header('location: login.html');
    }   

?>