<?php

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
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Signin</legend>
                Username:   <input type="text" name="username" value="<?php if(isset($username)){echo $username;}?>"> <br>
                Password:   <input type="password" name="password" value=""> <br>
                            <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
</body>
</html>