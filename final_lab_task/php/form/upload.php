<?php

    //$username = $_GET['username'];
    //$password = $_GET['password'];

    //$username = $_POST['username'];
    //$password = $_POST['password'];

    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "null username or password!";
        }else {

            if($username == $password){
                echo "valid user!";
            }else{
                echo "invalid user!";
            }
        }
    }else{
        echo "please submit form first!";
    }

?>