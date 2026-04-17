<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "null name!";
    }else{
        echo "Name: ".$name;
    }
}else{
    echo "please submit form first!";
}
?>