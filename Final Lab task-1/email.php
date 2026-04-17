<?php
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "null email!";
    }else{
        echo "Email: ".$email;
    }
}else{
    echo "please submit form first!";
}
?>