<?php
if(isset($_REQUEST['submit'])){
    $bg = $_REQUEST['bg'];

    if($bg == ""){
        echo "null blood group!";
    }else{
        echo "Blood Group: ".$bg;
    }
}else{
    echo "please submit form first!";
}