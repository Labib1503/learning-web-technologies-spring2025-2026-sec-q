<?php
session_start();

if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];

    if($username == ""){
        echo "null username!";
    }else{
        if($username == $_SESSION['user']['username']){
            echo "Password: " . $_SESSION['user']['password'];
        } else {
            echo "Invalid user!";
    }
    }
}
?>