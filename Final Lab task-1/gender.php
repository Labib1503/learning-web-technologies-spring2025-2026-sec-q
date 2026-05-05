<?php
if(isset($_REQUEST['submit'])){
    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
        echo "Gender: ".$_REQUEST['gender'];
    }else{
        echo "please select gender!";
    }
}else{
    echo "please submit form first!";
}
?>