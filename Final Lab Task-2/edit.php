<?php
session_start();
if(isset($_REQUEST['submit'])){
    $username=$_REQUEST['username'];
    if($username == ""){
        echo "null username!";
    }else{
        $_SESSION['user']['username'] = $username;
        echo "updated!";
    }
}
?>