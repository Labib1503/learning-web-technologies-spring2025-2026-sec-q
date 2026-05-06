<?php
    require_once('db.php');

    function loginAdmin($user){
        $con      = getConnection();
        $username = $user['username'];
        $password = $user['password'];
        $sql      = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result   = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 1){
            return true;
        }else{
            return false;
        }
    }

    function registerAdmin($user){
        $con      = getConnection();
        $username = $user['username'];
        $password = $user['password'];
        $sql      = "INSERT INTO admin VALUES(null, '$username', '$password')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>