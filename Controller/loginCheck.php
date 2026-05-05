<?php
if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];

    if($username == "" || $password == ""){
        echo "null username or password!";
    }else{
        $users = [
            "user1" => "123",
            "user2" => "456"
        ];
        $admins = [
            "admin1" => "111",
            "admin2" => "222"
        ];
        if($role == "user"){
            if(isset($users[$username]) && $users[$username] == $password){
                setcookie('status', 'user', time()+3000, '/');
                header('location: ../view/home.php');
            }else{
                echo "invalid user!";
            }
        }
        else if($role == "admin"){
            if(isset($admins[$username])&& $admins[$username] == $password){
                setcookie('status', 'admin', time()+3000, '/');
                header('location: ../view/home.php');
            }else{
                echo "invalid admin!";
            }
        }
    }
}else{
    header('location: ../view/login.html');
}
?>